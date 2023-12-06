console.log('Active', '0.1.17')


window.BabyFairTheme = {
    OrderEnum: {
        SELLER: 'SELLER',
        BUYER: 'BUYER'
    },
    formData: {},
    registerBuyerForm: document.getElementById('trade-fair-registration-form'),
    orderAmount: 0,
    selectedProduct: {},
    orderType: 'SELLER',
    triggerBuyerForm: (type = 'buyer') => {

        // BabyFairTheme.updateType(type);
        let registerBuyerForm = BabyFairTheme.registerBuyerForm || document.getElementById('trade-fair-registration-form')

        if (!registerBuyerForm) {
            window.location.reload();
        }
        console.log('BabyFairTheme.selected', BabyFairTheme.selectedProduct.id)
        document.forms.signupForm.querySelector('select[name=businessType]').value = BabyFairTheme.selectedProduct.id

        registerBuyerForm.style.display = 'block';
    },
    closeBuyerForm: () => {
        let registerBuyerForm = BabyFairTheme.registerBuyerForm || document.getElementById('trade-fair-registration-form')

        if (!registerBuyerForm) {
            // window.location.reload();
            return;
        }
        registerBuyerForm.style.display = 'none';
        BabyFairTheme.showPaymentForm();

    },
    updatePrice: () => {
        console.log(' [ Updating Price  ]', BabyFairTheme.orderType, BabyFairTheme.selectedProduct)
        if(!BabyFairTheme.selectedProduct.price){
            return;
        }
        const bankTransferAmount = document.querySelector('.bank_transfer_amount');
        BabyFairTheme.setSelectedProduct(BabyFairTheme.selectedProduct.id);
        bankTransferAmount.innerText = BabyFairTheme.selectedProduct.price
        BabyFairTheme.orderAmount = BabyFairTheme.selectedProduct.price

    },
    updateType: (value) => {


        if (value === 'seller') {
            BabyFairTheme.orderType = BabyFairTheme.OrderEnum.SELLER
            return;
        }
        BabyFairTheme.selectedProduct = { id: value }

        BabyFairTheme.updatePrice();
    },
    setUp: () => {
        console.log(' [ SETUP] ');

        // BabyFairTheme.updatePrice();
        // addEventListeners
        const inputBoxType = document.forms.signupForm.querySelector('select[name=businessType]');

        inputBoxType.addEventListener('change', (e) => {
            BabyFairTheme.updateType(e.target.value);
        })
        const paymentForm = document.forms.signupForm;
        paymentForm.addEventListener("submit", BabyFairTheme.payment, false);
        const close = document.getElementById('close-payment-modal-x');
        close.addEventListener('click', () => {
            BabyFairTheme.closeBuyerForm();
        });
        BabyFairTheme.getProducts();
        // BabyFairTheme.showSuccespage();
        BabyFairTheme.showPaymentForm();
    },
    init: () => {
        console.log(' [ INITIATING ] ');
        const intervalSet = setInterval(() => {
            console.log(' [ Running Setup] ');
            clearInterval(intervalSet);
            BabyFairTheme.setUp();
        }, 1000);
    },
    submitForm: (response) => {
        try {
            const formData = {
                email: document.forms.signupForm.elements.email.value,
                businessType: document.forms.signupForm.elements.businessType.value,
                fullname: document.forms.signupForm.elements.fullname.value,
                business_name: document.forms.signupForm.elements.businessname.value,
                store_address: document.forms.signupForm.elements.storeaddress.value,
                phone: document.forms.signupForm.elements.phone.value,
                productId: BabyFairTheme.selectedProduct.id,
                nonce: document.forms.signupForm.elements._tradewpnonce.value,
                trade_nonce: document.forms.signupForm.elements.trade_nonce.value,
                txref: response.reference,
                paymentMethod: 'bt',
            }
            BabyFairTheme.formData = formData;

            const request = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(formData),
            }

            const origin = window.location.origin;
            console.log({ fm: BabyFairTheme.formData })

            fetch(`${origin}/wp-json/trade-fair/payment`, request).then(
                response => {
                    return response.json();
                }
            ).then(result => {
                switch (BabyFairTheme.formData.paymentMethod) {
                    case 'paystack':
                        if (result.orderId) {
                            BabyFairTheme.orderId = result.orderId
                            BabyFairTheme.showSuccespage(result, response.reference);
                        } else {
                            alert(result.message || 'Error with payment');
                        }
                        break;

                    default:
                        BabyFairTheme.orderId = result.orderId
                        BabyFairTheme.showSuccespage(result, response.reference);
                        break;
                }

                console.log({ result })
            })
        } catch (error) {
            console.error({ error })
        }
    },
    getProducts: () => {
        const request = {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            }
        }

        //     fetch(`${origin}/wp-json/trade-fair/products`, request).then(
        //         response => {
        //             return response.json();
        //         }
        //     ).then(result => {
        //  console.log({result})
        //         console.log({ result })
        //     })
    },
    /**
     * compound id with product_buy_
     * @param {*} id 
     * @returns 
     */
    commonGetProduct(compoundId) {

        const button = document.getElementById(compoundId);
        if(!button){
            return;
        }
        const price = button.dataset.productPrice;
        const name = button.dataset.productName;
        const id = button.dataset.productId;
        return { id, name, price }
    },
    /**
     * plain id
     * @param {*} id 
     * @returns 
     */
    getProductDataById(id) {
        const identity = `product_buy_${id}`;

        return BabyFairTheme.commonGetProduct(identity);
    },
    setSelectedProduct(id) {

        if (!id) return;
        console.log({ id })
        BabyFairTheme.selectedProduct = id.includes('product_buy_') ?
            BabyFairTheme.commonGetProduct(id) :
            BabyFairTheme.selectedProduct = BabyFairTheme.getProductDataById(id);
    },
    triggerFormByProduct(identity) {

        // const { id, name, price } = BabyFairTheme.commonGetProduct(identity);
        console.log({ identity }, 'iggerFormByProduct')
        BabyFairTheme.setSelectedProduct(identity)
        console.log({ sp: BabyFairTheme.selectedProduct.id }, 'iggerFormByProduct')

        BabyFairTheme.triggerBuyerForm()

    },
    showSuccespage(result, reference) {
        let successpage, successRef;
        const paymentform = document.getElementById('show-payment-form');
        switch (BabyFairTheme.formData.paymentMethod) {
            case 'paystack':
                successpage = document.getElementById('show-success-page');
                if (!successpage) {
                    return;
                }

                successRef = document.getElementById('success-ref');
                successRef.innerText = reference || ''
                paymentform.style.display = 'none'
                successpage.style.display = 'block'
                break;


            default:
                successpage = document.getElementById('show-bank-transfer-page');
                if (!successpage) {
                    return;
                }


                paymentform.style.display = 'none'
                successpage.style.display = 'block'
                break;
        }

    },
    showPaymentForm() {

        const paymentform = document.getElementById('show-payment-form');

        if (!paymentform) {
            return;
        }
        const successpage = document.getElementById('show-success-page');

        paymentform.style.display = 'block'
        successpage.style.display = 'none'
    },
    payment(e) {
        // if (BabyFairTheme.formData.paymentMethod === 'paystack') {
        //     BabyFairTheme.payWithPaystack(e)
        // } else {
        //     BabyFairTheme.payWithBankTransfer(e)
        // }
        BabyFairTheme.formData = {
            ...BabyFairTheme.formData,
            paymentMethod: 'bt'
        }

        switch (BabyFairTheme.formData.paymentMethod) {
            case 'paystack':
                BabyFairTheme.payWithPaystack(e)
                break;
            default:
                BabyFairTheme.payWithBankTransfer(e)
                break;
        }
    },
    payWithBankTransfer(e) {
        e.preventDefault();
        BabyFairTheme.updatePrice();
        const email = document.forms.signupForm.elements.email.value

        if (!email) {
            alert('email is missing')
            return;
        }
        BabyFairTheme.submitForm({ reference: new Date().getTime() });
        // show-bank-transfer-page
    },
    payWithPaystack(e) {
        e.preventDefault();
        BabyFairTheme.updatePrice();
        // const email = document.forms.signupForm.querySelector('input[name=email]').value
        const email = document.forms.signupForm.elements.email.value

        if (!email) {
            alert('email is missing')
            return;
        }
        // const response = {
        //     message: "Approved",
        //     redirecturl: "?trxref=T240558480978169&reference=T240558480978169",
        //     reference: "T240558480978169",
        //     status: "success",
        //     trans: "3193196628",
        //     transaction: "3193196628",
        //     trxref: "T240558480978169"
        // }

        let handler = PaystackPop.setup({
            key: 'pk_test_fa0305bb378324334f02ff3adc48f974e521afb2', // Replace with your public key
            email: email,
            amount: parseInt(BabyFairTheme.orderAmount) * 100,
            //   ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function () {
                // alert('Window closed.');
            },
            callback: function (response) {
                let message = 'Payment complete! Reference: ' + response.reference;
                console.log({ message, response });
                BabyFairTheme.submitForm(response);

            }
        });

        handler.openIframe();
    }

}

window.BabyFairTheme.init()