<template>

  <div class="h-screen fixed relative">
    <nav class="px-[20px] py-[19px] bg-white flex items-center justify-between border-b-2 border-[#c2f2d9]">
      <img class="w-[176px] h-[27px]" src="/images/LayoutOne/LogoLayout_one.png" alt="" srcset="">
      <div class="flex items-center gap-3 items-center">
        <button class="relative h-[40px] w-[40px] flex items-center justify-center">
          <div
            class="absolute top-0 right-0 w-[19px] h-19px flex items-center justify-center text-white font-bold text-[10px] bg-[#0365F8] rounded-md">
            2</div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6 text-[#929292]">
            <path
              d="M5.85 3.5a.75.75 0 0 0-1.117-1 9.719 9.719 0 0 0-2.348 4.876.75.75 0 0 0 1.479.248A8.219 8.219 0 0 1 5.85 3.5ZM19.267 2.5a.75.75 0 1 0-1.118 1 8.22 8.22 0 0 1 1.987 4.124.75.75 0 0 0 1.48-.248A9.72 9.72 0 0 0 19.266 2.5Z" />
            <path fill-rule="evenodd"
              d="M12 2.25A6.75 6.75 0 0 0 5.25 9v.75a8.217 8.217 0 0 1-2.119 5.52.75.75 0 0 0 .298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 1 0 7.48 0 24.583 24.583 0 0 0 4.83-1.244.75.75 0 0 0 .298-1.205 8.217 8.217 0 0 1-2.118-5.52V9A6.75 6.75 0 0 0 12 2.25ZM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 0 0 4.496 0l.002.1a2.25 2.25 0 1 1-4.5 0Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <img src="images/LayoutThree/placeholderUser.png" class="w-[50px] h-[50px] rounded-full" />
        <h1 class="mb-0 font-semibold text-[16px]">Linda Blair</h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd"
            d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
            clip-rule="evenodd" />
        </svg>
      </div>
    </nav>
    <div class="flex fixed h-screen w-full justify-between bg-[#FFFBE8]">
      <SideBar class="w-[15%] 2xl:w-[15%] flex-grow bg-white shadow-md">
        <div class="bg-white w-full z-50 overflow-y-auto">
          <nav class="mt-6 list-none px-5">
            <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
            <li :class="currentRoute === 'dashboard' ? 'bg-[#26B893] text-white' : ''"
              class="flex flex-col py-5  rounded-xl w-full font-semibold items-center text-[14.5px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                  d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                <path
                  d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                <path
                  d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />
              </svg>
              <span class="font-bold text-[16px] mt-[12px]" v-show="!toggleTextMenu">Dashboard</span>
            </li>
            </Link>
            <Link as="button" class="w-full" :href="route('list.products')" @click="changeRoute('listagem')">
            <li :class="currentRoute === 'listagem' ? 'bg-[#26B893] text-white' : ''"
              class="flex flex-col py-5 justify-center rounded-xl w-full font-semibold items-center text-[14.5px]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
              </svg>
              <span class="font-bold text-[16px] mt-[12px]" v-show="!toggleTextMenu">Listagem</span>
            </li>
            </Link>
            <Link as="button" class="w-full" :href="route('list.create')" @click="changeRoute('cadastrar')">
            <li :class="currentRoute === 'cadastrar' ? 'bg-[#26B893] text-white' : ''"
              class="flex flex-col py-5 justify-center rounded-xl w-full font-semibold items-center text-[14.5px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                  d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                <path
                  d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
              </svg>
              <span class="font-bold text-[16px] mt-[12px]" v-show="!toggleTextMenu">Cadastrar</span>
            </li>
            </Link>
          </nav>
        </div>
      </SideBar>
      <div class="w-[85%] 2xl:w-[85%]">
        <div class="bg-white py-[14px] flex items-center justify-center gap-[45px]">
          <button class="pb-[5px] font-semibold text-[16px] text-[#26B893] border-b-4 border-[#26B893]">Geral</button>
          <button class="pb-[5px] font-semibold text-[16px] text-[#929292] ">Administrativo</button>
          <button class="pb-[5px] font-semibold text-[16px] text-[#929292] ">Vendas</button>
          <button class="pb-[5px] font-semibold text-[16px] text-[#929292] ">Lucros</button>
          <Link as="button" method="POST" href="/logout" class="pb-[5px] font-semibold text-[16px] text-[#929292] ">Configurações</Link>
        </div>
        <div class="p-[12px] bg-[#e3faf4] w-full overflow-y-auto h-[90vh] py-[60px]">
          <slot />
        </div>
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
