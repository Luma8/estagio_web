<template>

  <div class="relative flex gap-3 justify-between">
    <SideBar class="w-[20%] 2xl:w-[15%]">
      <div class="bg-white shadow-md h-screen w-full z-50 overflow-y-auto">
        <div class="p-5 flex h-16 mb-[50px] mt-[25px]">
          <img class="mx-auto w-[150px]" src="/images/LayoutOne/LogoLayout_one.png" alt="" srcset="">
        </div>
        <nav class="mt-6 list-none px-5">
          <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
          <li :class="currentRoute === 'dashboard' ? 'bg-[#F4FE41]' : ''"
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
          <Link as="button" class="w-full" :href="route('list.ConfigCarros')"
            v-if="$page.props.userPermissions.includes('list.ConfigCarros')" @click="changeRoute('listagem')">
          <li :class="currentRoute === 'listagem' ? 'bg-[#F4FE41]' : ''"
            class="flex flex-col py-5 justify-center rounded-xl w-full font-semibold items-center text-[14.5px]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
            </svg>
            <span class="font-bold text-[16px] mt-[12px]" v-show="!toggleTextMenu">Listagem</span>
          </li>
          </Link>
          <Link as="button" class="w-full" :href="route('list.ConfigCarros')"
            v-if="$page.props.userPermissions.includes('list.ConfigCarros')" @click="changeRoute('cadastrar')">
          <li :class="currentRoute === 'cadastrar' ? 'bg-[#F4FE41]' : ''"
            class="flex flex-col py-5 justify-center rounded-xl w-full font-semibold items-center text-[14.5px]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
            </svg>
            <span class="font-bold text-[16px] mt-[12px]" v-show="!toggleTextMenu">Cadastrar</span>
          </li>
          </Link>
        </nav>
      </div>
    </SideBar>
    <div class=" p-6 mt-16 w-[60%] 2xl:w-[70%]">
      <slot />
    </div>
    <SideBarRight class="w-[20%] 2xl:w-[15%]">
      <div class="bg-white shadow-md h-screen w-full z-50 overflow-y-auto">
        <nav class="mt-6 list-none px-5">
          <div class="flex items-center justify-center">
            <div class="border-[4px] rounded-full border-[#F8E3AA] overflow-hidden relative">
              <div class="border-[10px] rounded-full border-[#F8E329]">
                <img class="rounded-full h-[80px] w-[80px] object-cover z-50" :src="$page.props.user?.profile_picture"
                  onerror="this.src='/images/profile_default.png';" />
              </div>
            </div>
          </div>
          <div class="flex flex-col mt-4 text-center">
            <h1 class="font-semibold text-[14px] mb-1 text-[#000000]">{{ $page.props.user?.name }}</h1>
            <p class="font-semibold text-[14px] text-[#858585]">UX/UI Designer</p>
          </div>
          <div class="mt-[24px]">
            <h1 class="text-[20px] font-bold">Navegação</h1>
            <p class="font-bold text-[14px] text-[#858585]">Acesse as páginas para seu perfil</p>
          </div>
          <ul class="mt-[20px] flex flex-col gap-y-4">
            <li>
              <a class="px-3 py-5 bg-[#FFFBE8] flex items-center justify-between rounded-xl" href="#">
                <div class="flex gap-3 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 text-[#11E86F]">
                    <path fill-rule="evenodd"
                      d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                      clip-rule="evenodd" />
                  </svg>
                  <div>
                    <span class="font-bold text-[18px]">Meus dados</span>
                    <p class="text-[14px] #868E96">Ir à página</p>
                  </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a class="px-3 py-5 bg-[#FFFBE8] flex items-center justify-between rounded-xl" href="#">
                <div class="flex gap-3 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 text-[#11E86F]">
                    <path
                      d="M5.85 3.5a.75.75 0 0 0-1.117-1 9.719 9.719 0 0 0-2.348 4.876.75.75 0 0 0 1.479.248A8.219 8.219 0 0 1 5.85 3.5ZM19.267 2.5a.75.75 0 1 0-1.118 1 8.22 8.22 0 0 1 1.987 4.124.75.75 0 0 0 1.48-.248A9.72 9.72 0 0 0 19.266 2.5Z" />
                    <path fill-rule="evenodd"
                      d="M12 2.25A6.75 6.75 0 0 0 5.25 9v.75a8.217 8.217 0 0 1-2.119 5.52.75.75 0 0 0 .298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 1 0 7.48 0 24.583 24.583 0 0 0 4.83-1.244.75.75 0 0 0 .298-1.205 8.217 8.217 0 0 1-2.118-5.52V9A6.75 6.75 0 0 0 12 2.25ZM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 0 0 4.496 0l.002.1a2.25 2.25 0 1 1-4.5 0Z"
                      clip-rule="evenodd" />
                  </svg>
                  <div>
                    <span class="font-bold text-[18px]">Notificações</span>
                    <p class="text-[14px] #868E96">Ir à página</p>
                  </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <Link class="px-3 py-5 bg-[#FFFBE8] flex items-center justify-between rounded-xl" href="/logout" method="post">
                <div class="flex gap-3 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#11E86F]">
                    <path
                      d="M11.47 1.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1-1.06 1.06l-1.72-1.72V7.5h-1.5V4.06L9.53 5.78a.75.75 0 0 1-1.06-1.06l3-3ZM11.25 7.5V15a.75.75 0 0 0 1.5 0V7.5h3.75a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h3.75Z" />
                  </svg>
                  <div>
                    <span class="font-bold text-[18px]">Sair da conta</span>
                    <p class="text-[14px] #868E96">Ir à página</p>
                  </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </Link>
            </li>
          </ul>
        </nav>
      </div>
    </SideBarRight>
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
