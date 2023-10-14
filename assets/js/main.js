console.log('Active', '0.1.4')


window.BabyFairTheme = {
    OrderEnum: {
        SELLER: 'SELLER',
        BUYER: 'BUYER'
    },
    registerBuyerFormElement: document.getElementById('trade-fair-registration-form'),
    tradeFairFormPrice: document.getElementById('trade-fair-form-price'),
    orderAmount: 0,
    orderType: 'SELLER',
    triggerBuyerForm: (type = 'buyer') => {

        BabyFairTheme.updateType(type)
        let registerBuyerForm = BabyFairTheme.registerBuyerForm || document.getElementById('trade-fair-registration-form')

        if (!registerBuyerForm) {
            window.location.reload();
        }
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
        console.log(' [ Updating Price  ]', BabyFairTheme.orderType)
        const tradeFairPriceElement = BabyFairTheme.tradeFairFormPrice || document.getElementById('trade-fair-form-price');
        switch (BabyFairTheme.orderType) {
            case BabyFairTheme.OrderEnum.BUYER:
                tradeFairPriceElement.innerText = '1000'
                BabyFairTheme.orderAmount = '1000'
                break;
            case BabyFairTheme.OrderEnum.SELLER:
            default:
                tradeFairPriceElement.innerText = '5000'
                BabyFairTheme.orderAmount = '5000'
                break;
        }
    },
    updateType: (value) => {

        if (value === 'buyer') {
            BabyFairTheme.orderType = BabyFairTheme.OrderEnum.BUYER
        }
        if (value === 'seller') {
            BabyFairTheme.orderType = BabyFairTheme.OrderEnum.SELLER
        }

        const inputBoxType = document.forms.signupForm.querySelector('select[name=businessType]');

        if (inputBoxType.value != BabyFairTheme.orderType) {
            inputBoxType.value = BabyFairTheme.orderType.toLowerCase()
        }
        BabyFairTheme.updatePrice();


    },
    setUp: () => {
        console.log(' [ SETUP] ');

        BabyFairTheme.updatePrice();
        // addEventListeners
        const inputBoxType = document.forms.signupForm.querySelector('select[name=businessType]');

        inputBoxType.addEventListener('change', (e) => {
            BabyFairTheme.updateType(e.target.value);

        })
        const paymentForm = document.forms.signupForm;
        paymentForm.addEventListener("submit", BabyFairTheme.payWithPaystack, false);
        const close = document.getElementById('close-payment-modal-x');
        close.addEventListener('click', () => {
            BabyFairTheme.closeBuyerForm();

        })
        // BabyFairTheme.showSuccespage();
        BabyFairTheme.showPaymentForm();
    },
    init: () => {
        console.log(' [ INITIATING ] ');

        const intervalSet = setInterval(() => {
            console.log(' [ Running Setup] ');
            if (document.getElementById('trade-fair-form-price')) {
                clearInterval(intervalSet);
                BabyFairTheme.setUp();

            }
        }, 1000);

    },
    submitForm: (response) => {
        try {
            const formData = {
                email: document.forms.signupForm.elements.email.value,
                businessType: document.forms.signupForm.elements.businessType.value,
                fullname: document.forms.signupForm.elements.fullname.value,
                phone: document.forms.signupForm.elements.phone.value,
                nonce: document.forms.signupForm.elements._tradewpnonce.value,
                trade_nonce: document.forms.signupForm.elements.trade_nonce.value,
                txref: response.reference
            }

            const request = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(formData),
            }
            const origin = window.location.origin
            fetch(`${origin}/wp-json/trade-fair/payment`, request).then(
                response => {
                    return response.json();
                }
            ).then(result => {
                if (result.orderId) {
                    BabyFairTheme.orderId = result.orderId
                    BabyFairTheme.showSuccespage(result, response.reference);
                } else {
                    alert(result.message || 'Error with payment');
                }
                console.log({ result })
            })
        } catch (error) {
            console.error({ error })
        }


    },
    showSuccespage(result, reference) {
        const successpage = document.getElementById('show-success-page');
        if (!successpage) {
            return;
        }
        const paymentform = document.getElementById('show-payment-form');
        const successRef = document.getElementById('success-ref');
        successRef.innerText = reference || ''
        paymentform.style.display = 'none'
        successpage.style.display = 'block'
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