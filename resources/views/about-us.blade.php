<x-layout>
    @push('css')
    <style>
        .our-team {
          padding: 30px 0 40px;
          margin-bottom: 30px;
          background-color: #f1f5f9;
          text-align: center;
          overflow: hidden;
          position: relative;
        }
  
        .our-team .picture {
          display: inline-block;
          height: 130px;
          width: 130px;
          margin-bottom: 50px;
          z-index: 1;
          position: relative;
        }
  
        .our-team .picture::before {
          content: "";
          width: 100%;
          height: 0;
          border-radius: 50%;
          background-color: #1e3a8a;
          position: absolute;
          bottom: 135%;
          right: 0;
          left: 0;
          opacity: 0.9;
          transform: scale(3);
          transition: all 0.3s linear 0s;
        }
  
        .our-team:hover .picture::before {
          height: 100%;
        }
  
        .our-team .picture::after {
          content: "";
          width: 100%;
          height: 100%;
          border-radius: 50%;
          background-color: #1e3a8a;
          position: absolute;
          top: 0;
          left: 0;
          z-index: -1;
        }
  
        .our-team .picture img {
          width: 100%;
          height: 100%;
          border-radius: 50%;
          object-fit: cover;
          transform: scale(1);
          transition: all 0.9s ease 0s;
        }
  
        .our-team:hover .picture img {
          box-shadow: 0 0 0 14px #1e3a8a;
          transform: scale(0.7);
        }
  
        .our-team .title {
          display: block;
          font-size: 15px;
          color: #4e5052;
          text-transform: capitalize;
        }
  
        .our-team .social {
          width: 100%;
          padding: 0;
          margin: 0;
          background-color: #1e3a8a;
          position: absolute;
          bottom: -100px;
          left: 0;
          transition: all 0.5s ease 0s;
        }
  
        .our-team:hover .social {
          bottom: 0;
        }
  
        .our-team .social li {
          display: inline-block;
        }
  
        .our-team .social li a {
          display: block;
          padding: 10px;
          font-size: 17px;
          color: white;
          transition: all 0.3s ease 0s;
          text-decoration: none;
        }
  
        .our-team .social li a:hover {
          color: #1e3a8a;
          background-color: #f7f5ec;
          border-radius: 50%;
        }
      </style>
    @endpush
    @stack('css')
    <div class="w-full bg-gray-200 py-10">
        <div class="sm:flex items-center w-full px-[100px]">
          <div class="w-[50%] p-10">
            <div class="image  text-center">
              <img class="w-[60%] mx-auto"
                src="{{ asset('assets/group.svg') }}"
              />
            </div>
          </div>
          <div class="w-[50%] p-5">
            <div class="text">
              <span class="text-gray-500 border-b-2 border-indigo-600 uppercase"
                >About us</span
              >
              <h2 class="my-4 font-bold text-3xl sm:text-4xl text-gray-600">
                About <span class="text-yellow-600">Our Team</span>
              </h2>
              <p class="text-gray-700 w-[560px] text-base tracking-wide">
                In any industry where the people behind a company are as important as the company itself, you’re likely to find a kind of expanded “about” page that includes information on individual employees. 
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center my-[50px] text-3xl font-bold text-gray-600">
        Our Team Membership
      </div>
      <div class="w-full grid grid-cols-4 gap-5 px-[200px]">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/zaw.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]">Zaw Hein Htet</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Leader
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Back-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="https://www.facebook.com/zaw.h.htet.391?mibextid=ZbWKwL" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="https://t.me/zawheinhtet88" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/kyaw.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]">Kyaw Zayar Phyo</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Designer
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Front-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/khant.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]">Khant Nyi Nyi</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Member
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Back-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/phoo.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]">Phoo Pwint San</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Member
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Back-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/thae.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]"> Thae<sup>2</sup> Pyae Sone San</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Member
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Back-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/kay.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]">Kay Zin Phoo Pwint</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Member
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Back-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/yin.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]">Yin Nyein Chan</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Designer
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Back-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team rounded-md shadow-lg cursor-pointer">
            <div class="picture">
              <img
                class="img-fluid"
                src="{{ asset('assets/sint.jpg') }}"
              />
            </div>
            <div class="team-content translate-y-[-30px]">
              <h3 class="name text-[24px] font-bold pb-[5px]">Sint Sint Hlaing</h3>
              <div class="flex gap-3 justify-center items-center">
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Designer
                </p>
                <p
                  class="font-bold text-sm bg-yellow-600 px-[5px] pb-[3px] rounded-md text-white"
                >
                  Front-End Developer
                </p>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <path
                      fill="#1877F2"
                      d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"
                    />
                    <path
                      fill="#FFF"
                      d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <defs>
                      <linearGradient
                        id="logosTelegram0"
                        x1="50%"
                        x2="50%"
                        y1="0%"
                        y2="100%"
                      >
                        <stop offset="0%" stop-color="#2AABEE" />
                        <stop offset="100%" stop-color="#229ED9" />
                      </linearGradient>
                    </defs>
                    <path
                      fill="url(#logosTelegram0)"
                      d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.038 128.038 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51c0-33.934-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0"
                    />
                    <path
                      fill="#FFF"
                      d="M57.94 126.648c37.32-16.256 62.2-26.974 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072"
                    /></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg xmlns="" width="32" height="32" viewBox="0 0 256 256">
                    <g fill="none">
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram0)"
                        rx="60"
                      />
                      <rect
                        width="256"
                        height="256"
                        fill="url(#skillIconsInstagram1)"
                        rx="60"
                      />
                      <path
                        fill="#fff"
                        d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                      />
                      <defs>
                        <radialGradient
                          id="skillIconsInstagram0"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#FD5" />
                          <stop offset=".1" stop-color="#FD5" />
                          <stop offset=".5" stop-color="#FF543E" />
                          <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient
                          id="skillIconsInstagram1"
                          cx="0"
                          cy="0"
                          r="1"
                          gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#3771C8" />
                          <stop offset=".128" stop-color="#3771C8" />
                          <stop offset="1" stop-color="#60F" stop-opacity="0" />
                        </radialGradient>
                      </defs>
                    </g></svg
                ></a>
              </li>
              <li>
                <a href="" class="text-white" aria-hidden="true"
                  ><svg
                    xmlns=""
                    class="text-green-400"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4V2h10v2zm0 4V6h10v2zm0 4v-2h10v2zm6.95 10q-3.125 0-6.175-1.362t-5.55-3.863q-2.5-2.5-3.862-5.55T2 5.05q0-.45.3-.75t.75-.3H7.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T8.4 9.45L5.975 11.9q.5.925 1.187 1.788t1.513 1.662q.775.775 1.625 1.438T12.1 18l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T20 16.9v4.05q0 .45-.3.75t-.75.3"
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
</x-layout>