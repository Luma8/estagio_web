<template>

  <div class="relative flex items-center justify-between bg-[#F3F6FE] overflow-y-hidden">
    <SideBar
      class="w-[15%] 2xl:w-[15%] relative flex-grow bg-gradient-to-t from-[#1D1F2C] to-[#1E2134] shadow-md h-screen">
      <div class="w-full z-50 overflow-y-auto">
        <div class="py-5 flex mb-[50px] mt-[25px]">
          <img class="mx-auto object-cover h-[40px]" src="/images/LayoutThree/Logo.png" alt="">
        </div>
        <nav class="mt-6 list-none pl-[4px]">

          <section class="flex flex-col gap-y-[12px]">

            <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
            <li :class="currentRoute === 'dashboard' ? 'text-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                  d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                <path
                  d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
              </svg>
              <span :class="currentRoute === 'dashboard' ? 'border-b border-[#0365F8] ' : 'border-b-0'"
                class="font-bold">Dashboard</span>
            </li>
            </Link>

            <Link as="button" class="w-full" :href="route('list.products')" @click="changeRoute('listagem')">
            <li :class="currentRoute === 'listagem' ? 'text-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                  d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                <path
                  d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
              </svg>
              <span :class="currentRoute === 'listagem' ? 'border-b border-[#0365F8] ' : 'border-b-0'"
                class="font-bold">Listagem</span>
            </li>
            </Link>

            <Link as="button" class="w-full" :href="route('list.create')" @click="changeRoute('cadastrar')">
            <li :class="currentRoute === 'cadastrar' ? 'text-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                  clip-rule="evenodd" />
              </svg>
              <span :class="currentRoute === 'cadastrar' ? 'border-b border-[#0365F8] ' : 'border-b-0'"
                class="font-bold">Cadastro</span>
            </li>
            </Link>

          </section>
          <div class="absolute bottom-[20px] right-[16px] left-[16px]">
            <Link as="button" class="w-full" method="POST" href="/logout" @click="changeRoute('sair')">
            <li :class="currentRoute === 'sair' ? 'text-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm10.72 4.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H9a.75.75 0 0 1 0-1.5h10.94l-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                  clip-rule="evenodd" />
              </svg>
              <span :class="currentRoute === 'sair' ? 'border-b border-[#0365F8] ' : 'border-b-0'"
                class="font-bold">Sair</span>
            </li>
            </Link>
          </div>
        </nav>
      </div>
    </SideBar>
    <div class="w-[85%] h-screen">

      <nav class="relative w-full bg-transparent">
        <div class="absolute w-full h-[280px] bg-[#1D1F2C] z-0">
          <img class="absolute bottom-0 left-0" src="images/LayoutFive/Ornament.png" />
          <img class="absolute top-0 right-0" src="images/LayoutFive/Ornament2.png" />
        </div>
        <div class="relative z-50">
          <div class="p-[24px] flex items-center justify-between">
            <div class="flex items-center gap-3">
              <img class="w-[38px] h-[38px] rounded-full" src="images/LayoutThree/placeholderUser.png" alt="">
              <div class="flex flex-col">
                <h1 class="mb-0 text-[14px] text-white">Philipe Silva</h1>
                <p class="mb-0 text-[#B9B9B9] text-[12px]">Desenvolvedor</p>
              </div>
            </div>
            <div class="flex items-center gap-3 bg-gray-700/90 rounded-3xl px-[16px] py-[10px] w-[40%]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-white">
                <path fill-rule="evenodd"
                  d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                  clip-rule="evenodd" />
              </svg>
              <input type="text" class="text-white placeholder:text-white p-0 w-full border-0 outline-0 bg-transparent"
                placeholder="Pesquisar" />
            </div>
            <button class="flex items-center justify-center rounded-full w-[40px] h-[40px]">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#fff"></rect>
                <path d="M1.638,5.846H30.362c-.711-1.108-1.947-1.846-3.362-1.846H5c-1.414,0-2.65,.738-3.362,1.846Z"
                  fill="#a62842"></path>
                <path d="M2.03,7.692c-.008,.103-.03,.202-.03,.308v1.539H31v-1.539c0-.105-.022-.204-.03-.308H2.03Z"
                  fill="#a62842"></path>
                <path fill="#a62842" d="M2 11.385H31V13.231H2z"></path>
                <path fill="#a62842" d="M2 15.077H31V16.923000000000002H2z"></path>
                <path fill="#a62842" d="M1 18.769H31V20.615H1z"></path>
                <path d="M1,24c0,.105,.023,.204,.031,.308H30.969c.008-.103,.031-.202,.031-.308v-1.539H1v1.539Z"
                  fill="#a62842"></path>
                <path d="M30.362,26.154H1.638c.711,1.108,1.947,1.846,3.362,1.846H27c1.414,0,2.65-.738,3.362-1.846Z"
                  fill="#a62842"></path>
                <path d="M5,4h11v12.923H1V8c0-2.208,1.792-4,4-4Z" fill="#102d5e"></path>
                <path
                  d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                  opacity=".15"></path>
                <path
                  d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                  fill="#fff" opacity=".2"></path>
                <path fill="#fff"
                  d="M4.601 7.463L5.193 7.033 4.462 7.033 4.236 6.338 4.01 7.033 3.279 7.033 3.87 7.463 3.644 8.158 4.236 7.729 4.827 8.158 4.601 7.463z">
                </path>
                <path fill="#fff"
                  d="M7.58 7.463L8.172 7.033 7.441 7.033 7.215 6.338 6.989 7.033 6.258 7.033 6.849 7.463 6.623 8.158 7.215 7.729 7.806 8.158 7.58 7.463z">
                </path>
                <path fill="#fff"
                  d="M10.56 7.463L11.151 7.033 10.42 7.033 10.194 6.338 9.968 7.033 9.237 7.033 9.828 7.463 9.603 8.158 10.194 7.729 10.785 8.158 10.56 7.463z">
                </path>
                <path fill="#fff"
                  d="M6.066 9.283L6.658 8.854 5.927 8.854 5.701 8.158 5.475 8.854 4.744 8.854 5.335 9.283 5.109 9.979 5.701 9.549 6.292 9.979 6.066 9.283z">
                </path>
                <path fill="#fff"
                  d="M9.046 9.283L9.637 8.854 8.906 8.854 8.68 8.158 8.454 8.854 7.723 8.854 8.314 9.283 8.089 9.979 8.68 9.549 9.271 9.979 9.046 9.283z">
                </path>
                <path fill="#fff"
                  d="M12.025 9.283L12.616 8.854 11.885 8.854 11.659 8.158 11.433 8.854 10.702 8.854 11.294 9.283 11.068 9.979 11.659 9.549 12.251 9.979 12.025 9.283z">
                </path>
                <path fill="#fff"
                  d="M6.066 12.924L6.658 12.494 5.927 12.494 5.701 11.799 5.475 12.494 4.744 12.494 5.335 12.924 5.109 13.619 5.701 13.19 6.292 13.619 6.066 12.924z">
                </path>
                <path fill="#fff"
                  d="M9.046 12.924L9.637 12.494 8.906 12.494 8.68 11.799 8.454 12.494 7.723 12.494 8.314 12.924 8.089 13.619 8.68 13.19 9.271 13.619 9.046 12.924z">
                </path>
                <path fill="#fff"
                  d="M12.025 12.924L12.616 12.494 11.885 12.494 11.659 11.799 11.433 12.494 10.702 12.494 11.294 12.924 11.068 13.619 11.659 13.19 12.251 13.619 12.025 12.924z">
                </path>
                <path fill="#fff"
                  d="M13.539 7.463L14.13 7.033 13.399 7.033 13.173 6.338 12.947 7.033 12.216 7.033 12.808 7.463 12.582 8.158 13.173 7.729 13.765 8.158 13.539 7.463z">
                </path>
                <path fill="#fff"
                  d="M4.601 11.104L5.193 10.674 4.462 10.674 4.236 9.979 4.01 10.674 3.279 10.674 3.87 11.104 3.644 11.799 4.236 11.369 4.827 11.799 4.601 11.104z">
                </path>
                <path fill="#fff"
                  d="M7.58 11.104L8.172 10.674 7.441 10.674 7.215 9.979 6.989 10.674 6.258 10.674 6.849 11.104 6.623 11.799 7.215 11.369 7.806 11.799 7.58 11.104z">
                </path>
                <path fill="#fff"
                  d="M10.56 11.104L11.151 10.674 10.42 10.674 10.194 9.979 9.968 10.674 9.237 10.674 9.828 11.104 9.603 11.799 10.194 11.369 10.785 11.799 10.56 11.104z">
                </path>
                <path fill="#fff"
                  d="M13.539 11.104L14.13 10.674 13.399 10.674 13.173 9.979 12.947 10.674 12.216 10.674 12.808 11.104 12.582 11.799 13.173 11.369 13.765 11.799 13.539 11.104z">
                </path>
                <path fill="#fff"
                  d="M4.601 14.744L5.193 14.315 4.462 14.315 4.236 13.619 4.01 14.315 3.279 14.315 3.87 14.744 3.644 15.44 4.236 15.01 4.827 15.44 4.601 14.744z">
                </path>
                <path fill="#fff"
                  d="M7.58 14.744L8.172 14.315 7.441 14.315 7.215 13.619 6.989 14.315 6.258 14.315 6.849 14.744 6.623 15.44 7.215 15.01 7.806 15.44 7.58 14.744z">
                </path>
                <path fill="#fff"
                  d="M10.56 14.744L11.151 14.315 10.42 14.315 10.194 13.619 9.968 14.315 9.237 14.315 9.828 14.744 9.603 15.44 10.194 15.01 10.785 15.44 10.56 14.744z">
                </path>
                <path fill="#fff"
                  d="M13.539 14.744L14.13 14.315 13.399 14.315 13.173 13.619 12.947 14.315 12.216 14.315 12.808 14.744 12.582 15.44 13.173 15.01 13.765 15.44 13.539 14.744z">
                </path>
              </svg>
            </button>
          </div>
        </div>
      </nav>

      <div class="p-[12px] relative z-50">
        <slot />
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, watch } from "vue";
import SlideUpDown from "vue3-slide-up-down";

const dropLogs = ref(false);

const dropdownConfig = ref(false);
const dropdownConfigConf = ref(false);

const dropdownAudit = ref(false);
const dropdownAuditConf = ref(false);

const dropdownReports = ref(false);
const dropdownReportsConf = ref(false);

const dropdownFinanceiro = ref(false);
const dropdownFinanceiroConf = ref(false);

const dropdownMotorista = ref(false);
const dropdownMotoristaConf = ref(false);

const currentRoute = ref("dashboard");

const changeRoute = (routName) => {
  currentRoute.value = routName;
}

const toggleMenu = ref(false);
const toggleTextMenu = ref(false);

const toggleMenuMobile = ref(true);

watch(toggleMenu, () => {
  if (!toggleMenu.value) {
    setTimeout(() => {
      toggleTextMenu.value = toggleMenu.value;
    }, 150);
    return;
  }
  toggleTextMenu.value = toggleMenu.value;
});
</script>


<style scoped>
/* Firefox */
* {
  scrollbar-width: auto;
  scrollbar-color: #d1d1d1 #ffffff;
}

/* Chrome, Edge, and Safari */
*::-webkit-scrollbar {
  width: 12px;
}

/* Chrome, Edge, and Safari */

*::-webkit-scrollbar-track {
  background: #ffffff;
}

*::-webkit-scrollbar-thumb {
  background-color: #d1d1d1;
  border-radius: 10px;
  border: 3px solid #ffffff;
}
</style>
