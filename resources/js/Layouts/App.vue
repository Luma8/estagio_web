<template>

  <div class="fixed w-full">

    <div class="relative flex flex-col justify-between bg-[#0B134E] z-50 h-screen">
      <div class="px-[48px] py-[24px] bg-white flex items-center justify-between">
        <div>
          <img class="w-[129px] h-[17px]" src="images/LayoutNine/Logo.png" />
        </div>
        <div class="flex items-center gap-3">
          <button class="h-[50px] w-[40px] rounded-md relative">
            <div
              class="px-[6px] py-[2px] font-bold bg-[#0365F8] text-white rounded-md absolute text-[10px] top-0 right-0">
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
          <div class="flex items-center gap-4">
            <img src="images/LayoutThree/placeholderUser.png" class="rounded-full w-[50px] h-[50px]" />
            <h1 class="font-bold text-[16px] mb-0">Linda Blair</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                clip-rule="evenodd" />
            </svg>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[45px] bg-white py-[16px] justify-center  border-t border-300/90">
        <Link as="button" :href="route('list.Dashboard')" @click='changeRoute("dashboard")' :class="currentRoute === 'dashboard' ? 'text-[#0365F8]' : 'text-[#929292]'" class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path
              d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
            <path
              d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
          </svg>
          <span>Dashboard</span>
        </Link>
        <Link as="button" :href="route('list.products')"  @click='changeRoute("Listagem")' :class="currentRoute === 'Listagem' ? 'text-[#0365F8]' : 'text-[#929292]'" class="flex items-center gap-3" >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd"
              d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
              clip-rule="evenodd" />
            <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
          </svg>
          <span>Listagem</span>
        </Link>
        <Link as="button" :href="route('list.create')"  @click='changeRoute("Cadastro")' :class="currentRoute === 'Cadastro' ? 'text-[#0365F8]' : 'text-[#929292]'" class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd"
              d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
              clip-rule="evenodd" />
          </svg>
          <span>Cadastro</span>
        </Link>
        <Link as="button" href="" @click='changeRoute("Suporte")' :class="currentRoute === 'Suporte' ? 'text-[#0365F8]' : 'text-[#929292]'" class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd"
              d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
              clip-rule="evenodd" />
            <path
              d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
          </svg>
          <span>Suporte</span>
        </Link>
        <Link as="button" method="POST" href="/logout" @click='changeRoute("Configurações")' :class="currentRoute === 'Configurações' ? 'text-[#0365F8]' : 'text-[#929292]'" class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd"
              d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 0 1-.517.608 7.45 7.45 0 0 0-.478.198.798.798 0 0 1-.796-.064l-.453-.324a1.875 1.875 0 0 0-2.416.2l-.243.243a1.875 1.875 0 0 0-.2 2.416l.324.453a.798.798 0 0 1 .064.796 7.448 7.448 0 0 0-.198.478.798.798 0 0 1-.608.517l-.55.092a1.875 1.875 0 0 0-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 0 1-.064.796l-.324.453a1.875 1.875 0 0 0 .2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 0 1 .796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 0 1 .517-.608 7.52 7.52 0 0 0 .478-.198.798.798 0 0 1 .796.064l.453.324a1.875 1.875 0 0 0 2.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 0 1-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 0 0 1.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 0 1-.608-.517 7.507 7.507 0 0 0-.198-.478.798.798 0 0 1 .064-.796l.324-.453a1.875 1.875 0 0 0-.2-2.416l-.243-.243a1.875 1.875 0 0 0-2.416-.2l-.453.324a.798.798 0 0 1-.796.064 7.462 7.462 0 0 0-.478-.198.798.798 0 0 1-.517-.608l-.091-.55a1.875 1.875 0 0 0-1.85-1.566h-.344ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z"
              clip-rule="evenodd" />
          </svg>
          <span>Configurações</span>
        </Link>
      </div>
      <div class="bg-[#EFEBFC] h-[90vh] overflow-y-auto custom-scrollbar px-[32px] py-[10px]">
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
