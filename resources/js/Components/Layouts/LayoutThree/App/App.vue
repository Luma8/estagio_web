<template>

  <div class="relative flex justify-between bg-[#F3F6FE]">
    <SideBar class="w-[15%] 2xl:w-[15%] flex-grow bg-[#192343] shadow-md">
      <div class="w-full z-50 overflow-y-auto">
        <div class="py-5 flex mb-[50px] mt-[25px]">
          <img class="mx-auto object-cover h-[40px]" src="/images/LayoutThree/Logo.png" alt="" srcset="">
        </div>
        <nav class="mt-6 list-none">

          <section>
            <div class="p-4">
              <h1 class="mb-0 font-bold text-[18px] text-white">Acesso Rápido</h1>
            </div>
            <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
            <li
              :class="currentRoute === 'dashboard' ? 'bg-[#303750] text-white border-l-8 border-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 p-2 items-center w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                  d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                <path
                  d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
              </svg>
              <span class="font-bold text-[16px]" v-show="!toggleTextMenu">Dashboard</span>
            </li>
            </Link>
            <Link as="button" class="w-full" :href="route('list.products')" @click="changeRoute('listagem')">
            <li
              :class="currentRoute === 'listagem' ? 'bg-[#303750] text-white border-l-8 border-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 p-2 items-center w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                  clip-rule="evenodd" />
                <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
              </svg>
              <span class="font-bold text-[16px]" v-show="!toggleTextMenu">Listagem</span>
            </li>
            </Link>
            <Link as="button" class="w-full" :href="route('list.create')" @click="changeRoute('cadastrar')">
            <li
              :class="currentRoute === 'cadastrar' ? 'bg-[#303750] text-white border-l-8 border-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 p-2 items-center w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="font-bold text-[16px]" v-show="!toggleTextMenu">Cadastrar</span>
            </li>
            </Link>
          </section>

          <section>
            <div class="p-4">
              <h1 class="mb-0 font-bold text-[18px] text-white">Serviços</h1>
            </div>
            <Link as="button" class="w-full" @click='changeRoute("Perfil")'>
            <li
              :class="currentRoute === 'Perfil' ? 'bg-[#303750] text-white border-l-8 border-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 p-2 items-center w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="font-bold text-[16px]" v-show="!toggleTextMenu">Perfil</span>
            </li>
            </Link>
            <Link as="button" class="w-full" @click="changeRoute('Permissões')">
            <li
              :class="currentRoute === 'Permissões' ? 'bg-[#303750] text-white border-l-8 border-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 p-2 items-center w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                  clip-rule="evenodd" />
                <path fill-rule="evenodd"
                  d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="font-bold text-[16px]" v-show="!toggleTextMenu">Permissões</span>
            </li>
            </Link>
            <Link as="button" class="w-full" @click="changeRoute('Logs')">
            <li
              :class="currentRoute === 'Logs' ? 'bg-[#303750] text-white border-l-8 border-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 p-2 items-center w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="font-bold text-[16px]" v-show="!toggleTextMenu">Logs</span>
            </li>
            </Link>
            <Link as="button" class="w-full" @click="changeRoute('Sair')">
            <li
              :class="currentRoute === 'Sair' ? 'bg-[#303750] text-white border-l-8 border-[#0365F8]' : 'text-[#858585]'"
              class="flex gap-3 p-2 items-center w-full font-semibold items-center text-[14px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="font-bold text-[16px]" v-show="!toggleTextMenu">Sair</span>
            </li>
            </Link>
          </section>

        </nav>
      </div>
    </SideBar>
    <div class="w-[85%]">
      <nav class="p-[12px] bg-white flex items-center justify-between">
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <div class="flex items-center gap-4">
          <div class="relative">
            <div class="rounded-[4px] bg-[red] absolute top-0 right-0 text-white text-[10px] font-bold w-[12px] h-[12px] flex items-center justify-center">2</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#858D9D]">
              <path fill-rule="evenodd"
                d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="relative">
            <div class="rounded-[4px] bg-[red] absolute top-0 right-0 text-white text-[10px] font-bold w-[12px] h-[12px] flex items-center justify-center">2</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#858D9D]">
              <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>
          </div>
          <div>
            <span class="border-l-2 border-gray-300/90"></span>
          </div>
          <div class="flex items-center gap-3">
            <div class="relative w-[32px] h-[32px]">
              <img class="h-[32px] w-[32px] object-cover" alt="" :src="$page.props.user?.profile_picture"
                onerror="this.src='/images/LayoutThree/placeholderUser.png';">
              <div
                class="w-[15px] bottom-0 right-0 h-[15px] bg-white rounded-full flex items-center justify-center absolute">
                <div class="w-[10px] h-[10px] bg-[#22CAAD] rounded-full"></div>
              </div>
            </div>
            <div class="flex flex-col">
              <h1 class="mb-0">Jay Hargudson</h1>
              <p class="mb-0 text-[#858585] text-[12px]">Manager</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
              <path fill-rule="evenodd"
                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                clip-rule="evenodd" />
            </svg>
          </div>
        </div>
      </nav>
      <div class="p-[12px]">
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
