<template>

  <div class="relative flex items-center justify-between bg-[#F3F6FE] overflow-y-hidden">
    <SideBar class="w-[15%] 2xl:w-[15%] relative flex-grow bg-gradient-to-t from-[#F24A62] to-[#FF369C] shadow-md h-screen">
      <div class="w-full z-50 overflow-y-auto">
        <div class="py-5 flex mb-[50px] mt-[25px]">
          <img class="mx-auto object-cover h-[18px]" src="/images/LayoutTwo/LogoLayoutTwo.png" alt="" srcset="">
        </div>
        <nav class="mt-6 list-none pl-[4px]">

          <section class="flex flex-col gap-y-[12px]">
            
            <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
            <li :class="currentRoute === 'dashboard' ? 'bg-white' : 'text-[#858585]'"
              class="flex justify-between rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div :class="currentRoute === 'dashboard' ? 'text-[#E4386A]' : 'text-[#FFBFD9]'"
                class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M2.25 13.5a8.25 8.25 0 0 1 8.25-8.25.75.75 0 0 1 .75.75v6.75H18a.75.75 0 0 1 .75.75 8.25 8.25 0 0 1-16.5 0Z"
                    clip-rule="evenodd" />
                  <path fill-rule="evenodd"
                    d="M12.75 3a.75.75 0 0 1 .75-.75 8.25 8.25 0 0 1 8.25 8.25.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75V3Z"
                    clip-rule="evenodd" />
                </svg>
                <span class="font-semibold text-[16px]" v-show="!toggleTextMenu">Dashboard</span>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#FFBFD9]">
                <path fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                  clip-rule="evenodd" />
              </svg>
            </li>
            </Link>

            <Link as="button" class="w-full" :href="route('list.products')" @click="changeRoute('listagem')">
            <li :class="currentRoute === 'listagem' ? 'bg-white' : 'text-[#858585]'"
              class="flex justify-between rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div :class="currentRoute === 'listagem' ? 'text-[#E4386A]' : 'text-[#FFBFD9]'"
                class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                  <path
                    d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                  <path
                    d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />
                </svg>
                <span class="font-semibold text-[16px]" v-show="!toggleTextMenu">Listagem</span>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#FFBFD9]">
                <path fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                  clip-rule="evenodd" />
              </svg>
            </li>
            </Link>

            <Link as="button" class="w-full" :href="route('list.create')" @click="changeRoute('cadastrar')">
            <li :class="currentRoute === 'cadastrar' ? 'bg-white' : 'text-[#858585]'"
              class="flex justify-between rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div :class="currentRoute === 'cadastrar' ? 'text-[#E4386A]' : 'text-[#FFBFD9]'"
                class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                  <path
                    d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                <span class="font-semibold text-[16px]" v-show="!toggleTextMenu">Cadastro</span>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#FFBFD9]">
                <path fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                  clip-rule="evenodd" />
              </svg>
            </li>
            </Link>

            <Link as="button" class="w-full" method="POST" href="/logout" @click="changeRoute('sair')">
            <li :class="currentRoute === 'sair' ? 'bg-white' : 'text-[#858585]'"
              class="flex justify-between rounded-l-2xl py-[10px] items-center px-[14px] w-full font-semibold items-center text-[14px]">
              <div :class="currentRoute === 'sair' ? 'text-[#E4386A]' : 'text-[#FFBFD9]'"
                class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
                <span class="font-semibold text-[16px]" v-show="!toggleTextMenu">Sair</span>
              </div>
            </li>
            </Link>

          </section>
          <p class="absolute text-white bottom-[20px] right-[16px] left-[16px]"><strong>Proconph Admin
              Dashboard</strong> <br> © 2024 Todos os Direitos <br> Reservados</p>
        </nav>
      </div>
    </SideBar>
    <div class="w-[85%] h-screen">
      <nav class="p-[12px] bg-gray-100/90 flex items-center justify-between">
        <h1 class="font-bold mb-0 text-[20px]">
          Dashboard
        </h1>
        <div class="flex items-center gap-4">
          <div class="relative flex items-center justify-center rounded-full w-[45px] h-[45px] bg-gray-200/90">
            <div
              class="rounded-full bg-[#DD2F6E] absolute top-0 right-0 text-white text-[10px] font-bold w-[16px] h-[16px] flex items-center justify-center">
              12
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 text-[#3E4954]">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </div>
          <div class="relative flex items-center justify-center rounded-full w-[45px] h-[45px] bg-gray-200/90">
            <div
              class="rounded-full bg-[#FF6D4D] absolute top-0 right-0 text-white text-[10px] font-bold w-[16px] h-[16px] flex items-center justify-center">
              !
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 text-[#FF6D4D]">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </div>
          <div>
            <span class="border-l border-gray-300/90"></span>
          </div>
          <div class="flex items-center gap-3">

            <div class="flex flex-col">
              <p class="mb-0 text-[#858585] flex justify-end text-[12px]">Bem-vindo</p>
              <h1 class="mb-0 font-bold">Gustavo Lino</h1>
            </div>
            <img class="h-[55px] w-[55px] rounded-full object-cover" alt="" :src="$page.props.user?.profile_picture"
              onerror="this.src='/images/LayoutThree/placeholderUser.png';">
          </div>
        </div>
      </nav>
      <div class="p-[12px] bg-gray-100/90">
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
