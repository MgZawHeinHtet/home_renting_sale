<x-layout>


    @push('css')
        <style>
            .calc-wrapper {
                max-width: 900px;
                padding: 4rem 1rem;
                margin: 0 auto;
            }

            .calc-wrapper>div {
                background: #fff;
                padding: 1.5rem 2.5rem;
            }

            .calc-content {
                margin-bottom: 1.6rem;
            }

            .calc-content h2,
            .result-content h2 {
                font-size: 1.4rem;
                font-weight: 600;
                text-align: center;
                opacity: 0.8;
                text-transform: uppercase;
                letter-spacing: 2px;
                padding: 0.4rem 0;
                border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            }

            #calc-form,
            .payment-info {
                margin-top: 1.6rem;
            }

            .form-item {
                margin: 0.8rem 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .input-name span {
                background-color: #ef476f;
                display: block;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 800;
            }

            .input-name {
                display: flex;
                align-items: center;
            }

            .input-name label {
                padding-left: 0.8rem;
            }

            .input-control input {
                font-size: 1.1rem;
                border: 2px solid rgba(0, 0, 0, 0.3);
                padding: 0.4rem 0.6rem;
                border-radius: 3px;
            }

            .input-control input:focus {
                outline: none;
            }

            .input-control span {
                padding-right: 0.6rem;
                font-weight: 300;
                opacity: 0.7;
            }

            .btns {
                margin-top: 2rem;
            }

            .btns input {
                background-color: #002349 ;
                display: block;
                border: none;
                margin: 1rem auto 0 auto;
                font-family: inherit;
                text-transform: uppercase;
                font-size: 1.1rem;
                color: #fff;
                padding: 0.7rem 0;
                width: 180px;
                border-radius: 3px;
                outline: 0;
                cursor: pointer;
            }

            .btns input:hover {
                opacity: 0.8;
            }

            .payment-info {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                text-align: center;
                gap: 1rem;
            }

            .payment-info div {
                padding: 1rem 0;
                background: #002349 ;
                color: #fff;
            }

            .payment-info div h4 {
                font-weight: 500;
                padding: 0.6rem 0;
            }

            .payment-info div span {
                font-weight: 400;
                font-size: 1.75rem;
            }

            @media screen and (max-width: 992px) {
                .payment-info {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media screen and (max-width: 680px) {
                .form-item {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .input-name {
                    margin-bottom: 0.6rem;
                }

                .input-control span {
                    display: block;
                }
            }
        </style>
    @endpush

    @stack('css')
    <div class = "calc-wrapper">
        <div class = "calc-content">
            <h2>Loan Calculator</h2>
            <form id = "calc-form">
                <!-- item -->
                <div class = "form-item">
                    <div class = "input-name">
                        <span>1</span>
                        <label for = "loan-amount">Loan Amount</label>
                    </div>
                    <div class = "input-control">
                        <span>(in kyats)</span>
                        <input type = "number" placeholder="0" id = "loan-amount" min = "0" step = "any" required>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class = "form-item">
                    <div class = "input-name">
                        <span>2</span>
                        <label for = "interest-rate">Interest Rate</label>
                    </div>
                    <div class = "input-control">
                        <span>(in percent)</span>
                        <input type = "number" placeholder="0" id = "interest-rate" min = "0" step = "any"
                            required>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class = "form-item">
                    <div class = "input-name">
                        <span>3</span>
                        <label for = "no-of-month">Number Of Months</label>
                    </div>
                    <div class = "input-control">
                        <span>(in months)</span>
                        <input type = "number" placeholder="0" id = "no-of-month" min = "0" step = "any"
                            required>
                    </div>
                </div>
                <!-- end of item -->

                <div class = "btns">
                    <input type = "submit" id = "calc-btn" value = "Calculate">
                    <input type = "button" id = "clear-btn" value = "Clear">
                </div>
            </form>
        </div>

        <div class = "result-content">
            <h2>Your Monthly Payments</h2>
            <div class = "payment-info">
                <div>
                    <h4>Loan Amount</h4>
                    <span>&mdash;</span>
                </div>
                <div>
                    <h4>Interest Rate</h4>
                    <span>&mdash;</span>
                </div>
                <div>
                    <h4>Number of Months</h4>
                    <span>&mdash;</span>
                </div>
                <div>
                    <h4>Monthly Payments</h4>
                    <span>&mdash;</span>
                </div>
            </div>
        </div>
    </div>
</x-layout>


@section('javascript')
    <script>
        const calcForm = document.getElementById('calc-form'),
            loanAmount = document.getElementById('loan-amount'),
            interestRate = document.getElementById('interest-rate'),
            noOfMonth = document.getElementById('no-of-month'),
            calcBtn = document.getElementById('calc-btn'),
            clearBtn = document.getElementById('clear-btn'),
            paymentInfoList = document.querySelectorAll('.payment-info div span');

        calcForm.addEventListener('submit', (e) => {
            e.preventDefault();
            showPaymentInfo();
        });

        clearBtn.addEventListener('click', clearInputAndResult);


        // show payment info
        function showPaymentInfo() {
            let monthlyPayment = calcMonthlyPayment(loanAmount.value, interestRate.value, noOfMonth.value);
            paymentInfoList[0].innerHTML = `${loanAmount.value.toLocaleString()}`;
            paymentInfoList[1].innerHTML = `${interestRate.value}%`;
            paymentInfoList[2].innerHTML = noOfMonth.value;
            paymentInfoList[3].innerHTML = `${parseFloat(monthlyPayment).toLocaleString()}`;
        }

        function calcMonthlyPayment(PV, i, n) {
            i = (i / 100) / 12;
            let PMT = (PV * i * Math.pow(1 + i, n)) / (Math.pow(1 + i, n) - 1);
            return PMT.toFixed(2);
        }

        function clearInputAndResult() {
            calcForm.reset();
            paymentInfoList.forEach(item => {
                item.innerHTML = "&mdash;";
            });
        }
    </script>
@endsection

@yield('javascript')
