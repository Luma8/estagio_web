<template>

  <div class="fixed w-full">

    <div class="relative flex p-[20px] gap-[20px] justify-between bg-[#DFE1E5] relative z-50 h-screen">

      <SideBar class="w-[18%]  2xl:w-[10%] rounded-3xl relative flex-grow bg-white shadow-md ">
        <div class="w-full z-50 overflow-y-auto">
          <div class="flex items-center justify-center py-[45px]">
            <img src="images/LayoutSeven/Logo.png" />
          </div>
          <nav class="mt-6 list-none px-[35px]">

            <section class="flex flex-col gap-y-[12px]">

              <Link as="button" class="w-full" :href="route('list.Dashboard')" @click='changeRoute("dashboard")'>
              <li
                :class="currentRoute === 'dashboard' ? 'bg-gradient-to-r from-[#1631BF] to-[#8d9ff7] text-white' : 'text-[#929292]'"
                class="flex items-center gap-3 rounded-2xl py-[10px] px-[14px] w-full font-semibold text-[14px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                  <path
                    d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
                <span>Home</span>
              </li>
              </Link>

              <Link as="button" class="w-full" :href="route('list.products')" @click="changeRoute('listagem')">
              <li
                :class="currentRoute === 'listagem' ? 'bg-gradient-to-r from-[#1631BF] to-[#8d9ff7] text-white' : 'text-[#929292]'"
                class="flex items-center gap-3 rounded-2xl py-[10px] px-[14px] w-full font-semibold text-[14px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M5.625 3.75a2.625 2.625 0 1 0 0 5.25h12.75a2.625 2.625 0 0 0 0-5.25H5.625ZM3.75 11.25a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75ZM3 15.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75ZM3.75 18.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75Z" />
                </svg>
                <span>Listagem</span>
              </li>
              </Link>

              <Link as="button" class="w-full" :href="route('list.create')" @click="changeRoute('cadastrar')">
              <li
                :class="currentRoute === 'cadastrar' ? 'bg-gradient-to-r from-[#1631BF] to-[#8d9ff7] text-white' : 'text-[#929292]'"
                class="flex items-center gap-3 rounded-2xl py-[10px] px-[14px] w-full font-semibold text-[14px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                  <path
                    d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                <span>Cadastro</span>
              </li>
              </Link>

            </section>

            <div class="absolute bottom-0 py-[20px]">
              <Link as="button" class="w-full" method="POST" href="/logout" @click="changeRoute('sair')">
              <li
                class="flex items-center gap-3 rounded-2xl py-[10px] px-[14px] w-full font-semibold text-[14px] text-[#F24F4F]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
                <span>Sair</span>
              </li>
              </Link>
              <p class="mt-[10px] text-[#CFC8C8] text-[12px]">
                <strong>Proconph Admin Dashboard</strong> <br>
                © 2024 Todos os Direitos Reservados
              </p>
            </div>

          </nav>
        </div>
      </SideBar>

      <div class="w-[82%] overflow-y-auto custom-scrollbar">
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
* {
  scrollbar-width: auto;
  scrollbar-color: #d1d1d1 #ffffff;
}

*::-webkit-scrollbar {
  width: 12px;
}



.custom-scrollbar {
  overflow-y: auto;

  padding-right: 20px;

  box-sizing: content-box;

  scrollbar-width: thin;
  scrollbar-color: #458DFA #f4f4f4;
}

/* Estilize a barra de rolagem */
.custom-scrollbar::-webkit-scrollbar {
  width: 8px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
  background-color: #458DFA;
  border-radius: 4px;
}

.custom-scrollbar::-webkit-scrollbar-track {
  background-color: #f4f4f4;
  border-radius: 4px;
}

*::-webkit-scrollbar-track {
  background: #ffffff;
}

*::-webkit-scrollbar-thumb {
  background-color: #d1d1d1;
  border-radius: 10px;
  border: 3px solid #ffffff;
}
</style>
