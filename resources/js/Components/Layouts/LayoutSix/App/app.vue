<template>

  <div class="relative flex items-center justify-between bg-[#FF9141] px-[24px] py-[20px]">
    <div class="flex items-center gap-6">
      <img src="images/LayoutTwo/LogoLayoutTwo.png" />
      <div class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-white">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
        <input type="text" class="placeholder:text-white text-white bg-transparent border-0 p-0 w-full outline-none"
          placeholder="Pesquisar" />
      </div>
    </div>
    <div class="flex items-center gap-6">
      <div class="flex items-center gap-3">
        <img class="w-[45px] h-[45px] rounded-full" src="images/LayoutThree/placeholderUser.png" alt="">
        <div class="flex flex-col">
          <h1 class="mb-0 text-white font-bold text-[16px]">Brian Lee</h1>
          <p class="text-[#EBEBEB] mb-0 font-semibold text-[14px]">Admin</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-white">
          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
      </div>
    </div>
  </div>
  <div class="relative flex justify-between bg-[#FF9141] overflow-y-hidden relative z-50 h-screen">
    <SideBar class="w-[15%] 2xl:w-[10%] rounded-tl-3xl relative flex-grow bg-white shadow-md">
      <div class="w-full z-50 overflow-y-auto">

        <nav class="mt-6 list-none px-[35px]">

          <section class="flex flex-col gap-y-[12px]">

            <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
            <li :class="currentRoute === 'dashboard' ? 'bg-[#FF922B] text-white' : 'text-[#929292]'"
              class="flex flex-col justify-center gap-3 rounded-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div class="flex items-center justify-center w-[35px] h-[35px] rounded-full"
                :class="currentRoute === 'dashboard' ? 'bg-white' : 'bg-[#FF922B]'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"
                  :class="currentRoute === 'dashboard' ? 'text-[#12B886]' : 'text-white'">
                  <path
                    d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                  <path
                    d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
              </div>
              <span class="font-bold">Dashboard</span>
            </li>
            </Link>

            <Link as="button" class="w-full" :href="route('list.products')" @click="changeRoute('listagem')">
            <li :class="currentRoute === 'listagem' ? 'bg-[#FF922B] text-white' : 'text-[#929292]'"
              class="flex flex-col justify-center gap-3 rounded-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div class="flex items-center justify-center w-[35px] h-[35px] rounded-full"
                :class="currentRoute === 'listagem' ? 'bg-white' : 'bg-[#FF922B]'">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6 "
                  :class="currentRoute === 'listagem' ? 'text-[#12B886]' : 'text-white'">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                </svg>
              </div>
              <span class="font-bold">Listagem</span>
            </li>
            </Link>

            <Link as="button" class="w-full" :href="route('list.create')" @click="changeRoute('cadastrar')">
            <li :class="currentRoute === 'cadastrar' ? 'bg-[#FF922B] text-white' : 'text-[#929292]'"
              class="flex flex-col justify-center gap-3 rounded-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div class="flex items-center justify-center w-[35px] h-[35px] rounded-full"
                :class="currentRoute === 'cadastrar' ? 'bg-white' : 'bg-[#FF922B]'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"
                  :class="currentRoute === 'cadastrar' ? 'text-[#12B886]' : 'text-white'">
                  <path fill-rule="evenodd"
                    d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
              <span class="font-bold">Cadastro</span>
            </li>
            </Link>

            <Link as="button" class="w-full" method="POST" href="/logout" @click="changeRoute('sair')">
            <li :class="currentRoute === 'Sair' ? 'bg-[#FF922B] text-white' : 'text-[#929292]'"
              class="flex flex-col justify-center gap-3 rounded-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div class="flex items-center justify-center w-[35px] h-[35px] rounded-full"
                :class="currentRoute === 'Sair' ? 'bg-white' : 'bg-[#FF922B]'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"
                  :class="currentRoute === 'Sair' ? 'text-[#12B886]' : 'text-white'">
                  <path fill-rule="evenodd"
                    d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
              <span class="font-bold">Sair</span>
            </li>
            </Link>

          </section>
        </nav>
      </div>
    </SideBar>
    <div class="w-[90%] bg-[#faf2eb] p-[24px]">
      <slot />
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
