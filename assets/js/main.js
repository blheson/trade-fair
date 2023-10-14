console.log('Here now')


window.BabyFairTheme = {
    OrderEnum: {
        SELLER: 'SELLER',
        BUYER: 'BUYER'
    },
    registerBuyerFormElement: document.getElementById('trade-fair-registration-form'),
    tradeFairFormPrice: document.getElementById('trade-fair-form-price'),
    orderAmount: 0,
    orderType: 'SELLER',
    triggerBuyerForm: () => {
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
    },
    updatePrice: () => {
        console.log(' [ Updating Price  ]', BabyFairTheme.orderType)
        const tradeFairPriceElement = BabyFairTheme.tradeFairFormPrice || document.getElementById('trade-fair-form-price');
        switch ( BabyFairTheme.orderType) {
            case BabyFairTheme.OrderEnum.BUYER:
                tradeFairPriceElement.orderAmount= '1000'
                tradeFairPriceElement.innerText = '1000'
                break;
            case BabyFairTheme.OrderEnum.SELLER:

            default:
                tradeFairPriceElement.innerText = '5000'
                tradeFairPriceElement.orderAmount= '5000'
                break;
        }
    },
    setUp: () => {
        console.log(' [ SETUP] ');



        BabyFairTheme.updatePrice();
        // addEventListeners
        const inputBoxType = document.forms.signupForm.querySelector('select[name=businessType]');

        inputBoxType.addEventListener('change', (e)=>{
            console.log(inputBoxType, e.target.value);
            if(e.target.value==='buyer'){
                BabyFairTheme.orderType = BabyFairTheme.OrderEnum.BUYER
            }
            if(e.target.value==='seller'){
                BabyFairTheme.orderType = BabyFairTheme.OrderEnum.SELLER
            }
            BabyFairTheme.updatePrice();
        })
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

    }
}

window.BabyFairTheme.init()