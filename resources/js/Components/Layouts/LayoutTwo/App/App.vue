<template>
  <div class="flex flex-col">
    <nav class="w-full bg-[#124A41] px-[42px] fixed z-10">
      <div class="flex items-center justify-between pt-[25px]">
        <div class="mr-[214px]">
          <img src="images/LayoutTwo/LogoLayoutTwo.png" alt="" />
        </div>
        <div class="flex justify-between w-full items-center">
          <h1 class="text-white text-[18px] font-bold">Dashboard</h1>
          <div class="flex items-center gap-4">
            <div class="w-[356px] bg-white rounded-[8px] flex items-center gap-3 px-4 py-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#868E96]">
                <path fill-rule="evenodd"
                  d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                  clip-rule="evenodd" />
              </svg>
              <input class="w-full bg-transparent border-0 outline-0" type="text" placeholder="Pesquisar">
            </div>
            <div class="flex items-center gap-3">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
              </button>
              <button class="w-[48px] h-[48px] bg-[#E6FCF5] rounded-full flex items-center justify-center">
                <span class="text-[#087F5B] font-bold text-[14px]">EA</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="h-[233px] w-full" />
    </nav>
    <div class="flex gap-3 justify-between z-20 mt-[100px] fixed w-full px-[42px]">
      <SideBar class="w-[15%] 2xl:w-[15%] flex-grow bg-white shadow-md rounded-t-lg">
        <div class="bg-white w-full z-50 rounded-t-3xl 2xl:h-4/6 h-3/6 ">
          <nav class="mt-6 list-none px-5 h-full">
            <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
            <li :class="currentRoute === 'dashboard' ? 'bg-[#F1F3F5]' : ''"
              class="flex items-center rounded-2xl w-full text-[16px] p-[16px] gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#12B886]">
                <path fill-rule="evenodd"
                  d="M2.25 2.25a.75.75 0 0 0 0 1.5H3v10.5a3 3 0 0 0 3 3h1.21l-1.172 3.513a.75.75 0 0 0 1.424.474l.329-.987h8.418l.33.987a.75.75 0 0 0 1.422-.474l-1.17-3.513H18a3 3 0 0 0 3-3V3.75h.75a.75.75 0 0 0 0-1.5H2.25Zm6.54 15h6.42l.5 1.5H8.29l.5-1.5Zm8.085-8.995a.75.75 0 1 0-.75-1.299 12.81 12.81 0 0 0-3.558 3.05L11.03 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l2.47-2.47 1.617 1.618a.75.75 0 0 0 1.146-.102 11.312 11.312 0 0 1 3.612-3.321Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="text-[16px]" v-show="!toggleTextMenu">Dashboard</span>
            </li>
            </Link>
            <Link as="button" class="w-full" :href="route('list.products')" @click="changeRoute('listagem')">
            <li :class="currentRoute === 'listagem' ? 'bg-[#F1F3F5]' : ''"
              class="flex items-center rounded-2xl w-full text-[16px] p-[16px] gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#12B886]">
                <path fill-rule="evenodd"
                  d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 0 0-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 0 0-2.282.819l-.922 1.597a1.875 1.875 0 0 0 .432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 0 0 0 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 0 0-.432 2.385l.922 1.597a1.875 1.875 0 0 0 2.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 0 0 2.28-.819l.923-1.597a1.875 1.875 0 0 0-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 0 0 0-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 0 0-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 0 0-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 0 0-1.85-1.567h-1.843ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="text-[16px]" v-show="!toggleTextMenu">Listagem</span>
            </li>
            </Link>
            <Link as="button" class="w-full" :href="route('list.create')" @click="changeRoute('cadastrar')">
            <li :class="currentRoute === 'cadastrar' ? 'bg-[#F1F3F5]' : ''"
              class="flex items-center rounded-2xl w-full text-[16px] p-[16px] gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#12B886]">
                <path
                  d="M5.566 4.657A4.505 4.505 0 0 1 6.75 4.5h10.5c.41 0 .806.055 1.183.157A3 3 0 0 0 15.75 3h-7.5a3 3 0 0 0-2.684 1.657ZM2.25 12a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3v-6ZM5.25 7.5c-.41 0-.806.055-1.184.157A3 3 0 0 1 6.75 6h10.5a3 3 0 0 1 2.683 1.657A4.505 4.505 0 0 0 18.75 7.5H5.25Z" />
              </svg>
              <span class="text-[16px]" v-show="!toggleTextMenu">Cadastrar</span>
            </li>
            </Link>
            <Link as="button" class="w-full" @click="changeRoute('perfil')">
            <li :class="currentRoute === 'perfil' ? 'bg-[#F1F3F5]' : ''"
              class="flex items-center rounded-2xl w-full text-[16px] p-[16px] gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#12B886]">
                <path fill-rule="evenodd"
                  d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="text-[16px]" v-show="!toggleTextMenu">Perfil</span>
            </li>
            </Link>
            <div class="h-full items-end flex">
              <Link as="button" class="w-full">
              <li class="flex items-center rounded-2xl w-full text-[16px] p-[16px] gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-6 h-6 text-[#12B886]">
                  <path fill-rule="evenodd"
                    d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
                <span class="text-[16px]" v-show="!toggleTextMenu">Sair</span>
              </li>
              </Link>
            </div>
          </nav>
        </div>
      </SideBar>
      <div class="py-[12px] w-[85%] 2xl:w-[85%] h-[90vh] overflow-y-auto">
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


::-webkit-scrollbar {
  display: none;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #888;
}
</style>
