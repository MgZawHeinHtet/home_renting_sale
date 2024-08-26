<x-layout>
    <div class="w-100vw bg-[#F8F8F8]">
        <!-- first section -->
       
        <div class="w-full relative">
            <div
                class="w-full h-[200px] z-10 bg-black absolute opacity-[0.5]"></div>

            <div class="relative w-full">
                <img class="w-full object-cover z-0 h-[200px]"
                    src="https://d28pk2nlhhgcne.cloudfront.net/assets/app/uploads/sites/3/2021/08/homebyme-homepage-gallery-9.jpg"
                    alt>
                <p
                    class="absolute z-30 bottom-[50%] left-[200px]  text-4xl text-white">Contact
                    Us</p>
            </div>
        </div>
        <!-- second section -->
        <form action="/contact/mail" method="POST">
            @csrf
            <div class="w-full flex">
                <div class="ms-[50px] w-[60%] flex justify-center items-center">
                  
                    <div
                        class="w-[80%] border-2 flex flex-col px-[40px] py-[20px] bg-white my-[100px]">
                        <x-alert></x-alert>
                        <p class="mb-[20px] text-xl font-light pt-[40px]">If you
                            need any assistance with Real Estate in Myanmar.
                            Contact our team today. </p>
                        <div class="flex w-full gap-5 mb-3">
                            <div class="w-[50%]">
                                <p class="mb-[5px]">First Name</p>
                                <div
                                    class="border-2 border-black px-[10px] py-[5px]"><input
                                        type="text" class="w-full outline-none"
                                        name="first_name"
                                        required="required"
                                        value="{{ auth()->user()?->name }}"
                                        placeholder="Enter your first name"></div>
                                        <x-error name="first_name"></x-error>
                            </div>
                            <div class="w-[50%]">
                                <p class="mb-[5px]">Last Name</p>
                                <div
                                    class="border-2 border-black px-[10px] py-[5px]"><input
                                        type="text" class="w-full outline-none"
                                        required="required"
                                        name="last_name"
                                        placeholder="Enter your last name"></div>
                                        <x-error name="last_name"></x-error>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="mb-[5px]">Email</p>
                            <div
                                class="border-2 border-black px-[10px] py-[5px]"><input
                                    type="email" class="w-full outline-none"
                                    required="required"
                                    name="email"
                                    value="{{ auth()->user()?->email }}"
                                    placeholder="Email"></div>
                        </div>
                        <div class="mb-3">
                            <p class="mb-[5px]">Message</p>
                            <div
                                class="border-2 border-black px-[10px] py-[5px]"><textarea
                                    rows="4" required="required"
                                    placeholder="Message"
                                    name="message"
                                    class="w-full outline-none"></textarea></div>
                        </div>
                        <p class="mb-2">Agreement</p>
                        <div class="flex items-center gap-3 mb-3">
                            <input type="checkbox" id="check"
                                required="required">
                            <label for="check">I consent to having this website
                                store my submitted information</label>
                        </div>
                        <button
                            class="border-2 bg-[#002349] py-[7px] text-white mb-5">Submit</button>
                       
                    </div>
                </div>
                <div class="w-[40%] py-[100px]">
                    <div
                        class="w-[70%] bg-white px-[30px] pt-[30px] mb-[200px]">
                        <p class="mb-5 font-bold">For inquiries contact:</p>
                        <p class="mb-1 font-bold">Luke Davies</p>
                        <p class="mb-1">CEO</p>
                        <p class="mb-5">zawheinhtet@PropertyinMyanmar.com</p>
                        <p class="mb-1 font-bold">Isabella Kyaw</p>
                        <p class="mb-1">Managing Director</p>
                        <p
                            class="mb-1 pb-[30px]">Homerrturning@PropertyinMyanmar.com</p>
                    </div>
                    <div
                        class="w-[70%] bg-white ps-[30px] pe-[117px] py-[30px] mb-[60px]">
                        <p class="mb-3 font-bold">Corporate Headquarters</p>
                        <p class="mb-3 font-light">40 Dhamika Waddy Street,
                            Sanchaung Township</p>
                    </div>
                    <div class="w-[70%] flex gap-5 justify-center items-center">
                        <div class="w-[40px] border-2 rounded-md overflow-hidden"><a
                                href="#"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAZlBMVEU7WZj///8lS5He4estUJOvuNApTZIhSJDL0eAzU5WEk7jx8/fp6/IvUZQ1VZY4V5e7w9eYpMOircnT2OVuga5Yb6R8jLXp6/GnsctOaKBEYJwaRY6Rn8BkealJZJ5rfqy4wNUGPYvGi15LAAAC4UlEQVR4nO3bbW+iQBSGYYo4SJUZFVpb+7r//09uNmtistTuMPSEZ8h9fyfhCsqBGS0KIiIiIiIiIiIiIiIiIiIiIiLKoeB9UznnyrKsb1bOfZaJBV+VtXt4PKz3m2612512NzqtciSGtnT902Z7F9O2nvt0R9fWz8dVFC5LYXDtYRfPy09YnvejeLkJ22a0LytheHkd78tJ2IQRt5cchdVbki8fobtPBOYidElfwYyEVfIVzETYpH4HcxGGMAGYhfAlbUzkI6zS7zKZCP0kYAbCMuFZNCthOE8D6gvdxEsoLwzVRKC8sDksXViPW7LITxjepwLVhe1x6cJy0gNbFsLJQHGh/1i68Ae+huJCt1m6sD4tXjgdqC1Mmffbf9sp7x/6foytO/bnL/aClYFFM2L9Yu3L1oe5z3hsI4bFm/Sluln1GQvsq7nPNa3o9/tO+X75XdED/9HPfaqJlV2ksMzuFnMpVnjK9UMa/XbY5XkjLeKFezf3maYWK/zMdFbEC9cIZUOIUD+ECPVDiFA/hAj1Q4hQLO8G/YoVvgyPvaayDuf7bjMo7r9bd7vhkde6IEJsJvyU+/tUFuLMhDI7pGZCmX9Ymgk3KoupZkKZxVQz4bGdm3bJTHjfzE27ZCbsVfYWzYTPIgPfTlgtXqgy8M2EOvvDVsJOZeCbCXX2h62EOm/HVsJXlYFvJtT5MZGV8EFlHJoJ53ZdsxLKjEMrocwahplQZg3DTCizhmEmlFnDMBPKrGGYCWXWMMyEHzKPNFbCd5lHGiuhzM6TmVBn4BsJlf7WZSMUeqQpCl8Nit0Dfrq5B6wzDf8UBsXv4w+P/dvcpv+1sF8qfBFChPohRKgfQoT6IUSoH0KE+iFEqB9ChPohRKgfQoT6IUSoH0KE+iFEqB9ChPohRKgfQoT6IUSoH0KE+iFEqB9ChPohRKgfQoT6IUSoH0KE+iFEqB9ChPohRKgfQoT6IUSoH8KfEf4GOABCzuymPZkAAAAASUVORK5CYII="
                                    alt></a></div>
                            <div class="w-[40px] border-2 rounded-md"><a href="#"><img
                                    src="https://www.iconninja.com/files/125/255/644/twitter-tweet-social-logo-icon.svg"
                                    alt></a></div>
                            <div class="w-[40px] border-2 rounded-md"><a href=""><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/YouTube_play_button_square_%282013-2017%29.svg/2048px-YouTube_play_button_square_%282013-2017%29.svg.png"
                                    alt></a></div>
                            <div class="w-[40px] border-2 rounded-md"><a href=""><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png"
                                    alt></a></div>
                            <div class="w-[40px] border-2 rounded-md"><a href=""><img
                                    src="data:image/png;base64,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"
                                    alt></a></div>
                        </div>
                    </div>
            </div>
        </form>
        <!-- third section -->
        <div class="w-full">
        <div class="w-full flex justify-center items-center">
            <div class="w-[90%] bg-white">
                <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1852.6398805943927!2d96.16885714816493!3d16.838823465555866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2sca!4v1703523303537!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="my-[30px] mx-[30px]"><span class="font-bold">Address:  </span>40 Dhamika Waddy Street, Sanchaung Township – Get Directions</p>
            </div>
           
        </div>
    </div>
        <!-- fouth section -->
        <div class="w-full mt-5 bg-[#]">

        </div>

        </div>
</x-layout>