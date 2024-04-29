<template>
  <div class="h-screen overflow-y-auto">

    <div class="flex items-center justify-between">
      <div class="flex flex-col">
        <h1 class="text-[23px] font-bold">Dashboard</h1>
        <p class="text-[#969BA0] mb-[8px] text-[18px] ">Bem-vindo ao Proconph Admin!</p>
      </div>
      <div class="flex flex-col justify-end">
        <h2 class="text-[#222132] font-semibold text-[24px] flex justify-end">{{ time }}</h2>
        <p class="text-[#757971] font-[400] text-[12px]">{{ dateString }}</p>
      </div>
    </div>

    <div class="flex items-center gap-10 my-[24px]">
      
      <div class="flex-grow flex items-center justify-between bg-white rounded-xl px-[36px] py-[15px]">
        <img src="images/LayoutSix/icon.png"/>
        <div class="flex flex-col">
          <h1 class="mb-0 font-semibold text-[18px]">Estatística</h1>
          <p class="mb-0 text-[#759791] text-[14px]">02 total</p>
        </div>
      </div>

      <div class="flex-grow flex items-center justify-between bg-white rounded-xl px-[36px] py-[15px]">
        <img src="images/LayoutSix/icon2.png"/>
        <div class="flex flex-col">
          <h1 class="mb-0 font-semibold text-[18px]">Ativos</h1>
          <p class="mb-0 text-[#759791] text-[14px]">02 total</p>
        </div>
      </div>

      <div class="flex-grow flex items-center justify-between bg-white rounded-xl px-[36px] py-[15px]">
        <img src="images/LayoutSix/icon.png"/>
        <div class="flex flex-col">
          <h1 class="mb-0 font-semibold text-[18px]">Inativos</h1>
          <p class="mb-0 text-[#759791] text-[14px]">00 total</p>
        </div>
      </div>

      <div class="flex-grow flex items-center justify-between bg-white rounded-xl px-[36px] py-[15px]">
        <img src="images/LayoutSix/icon2.png"/>
        <div class="flex flex-col">
          <h1 class="mb-0 font-semibold text-[18px]">Esse mês</h1>
          <p class="mb-0 text-[#759791] text-[14px]">0/2 total</p>
        </div>
      </div>

    </div>

    <div class="flex justify-between items-center px-[36px] py-[21px] bg-white rounded-t-xl">
      <div class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-[#FF922B]">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
        </svg>
        <h1 class="mb-0 font-semibold text-[18px]">Projetos Recentes</h1>
      </div>
      <div class="flex gap-3 items-center">
        <div>
          <button @click="showFitler" class="px-[11px] py-[7px] bg-[#FF922B] flex items-center gap-3 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 text-white">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
            </svg>
            <span class="text-white font-semibold">Filtros</span>
          </button>
          <div class="w-[406px] rounded-xl p-3 absolute bg-white" v-if="hasFilterClicked">
            <h1 class="">Filtro</h1>
            <div class="my-3 flex flex-col gap-y-3 border-b-2 border-t-2 border-gray-200/90 py-4">
              <button class="w-full flex justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M11.47 2.47a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06l-2.47-2.47V21a.75.75 0 0 1-1.5 0V4.81L8.78 7.28a.75.75 0 0 1-1.06-1.06l3.75-3.75Z"
                    clip-rule="evenodd" />
                </svg>
                <span>Ordenar A-Z</span>
              </button>
              <button class="w-full flex justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l2.47-2.47a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 1 1 1.06-1.06l2.47 2.47V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
                <span>Ordenar Z-A</span>
              </button>
              <button class="w-full flex justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M11.47 2.47a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06l-2.47-2.47V21a.75.75 0 0 1-1.5 0V4.81L8.78 7.28a.75.75 0 0 1-1.06-1.06l3.75-3.75Z"
                    clip-rule="evenodd" />
                </svg>
                <span>Antigo para recente</span>
              </button>
              <button class="w-full flex justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l2.47-2.47a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 1 1 1.06-1.06l2.47 2.47V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
                <span>Recente para antigo</span>
              </button>
            </div>
            <button class="w-full py-3 rounded-xl bg-[#FF9141]">
              <span class="font-bold text-[14px] text-white">Aplicar</span>
            </button>
          </div>
        </div>
        <button class="px-[11px] py-[7px] bg-[#FF922B] flex items-center gap-3 rounded-2xl">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
          </svg>
          <span class="text-white font-semibold">Cadastrar</span>
        </button>
        <button class="px-[11px] py-[7px] bg-[#FF922B] flex items-center gap-3 rounded-2xl text-white">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path
              d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
            <path
              d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
          </svg>
          <span class="text-white font-semibold">Exportar</span>
        </button>
        <button class="w-[35px] h-[35px] justify-center bg-[#FF922B] flex items-center rounded-full text-white">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <button class="w-[35px] h-[35px] justify-center bg-[#FF922B] flex items-center rounded-full text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
          </svg>
        </button>
      </div>
    </div>
    <table class="rounded-3xl table-auto w-full h-[368px]">
      <thead class="border-b rounded-3xl">
        <tr class="bg-[#F0F1F3] rounded-3xl">
          <th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
            <div class="flex items-center justify-between font-bold">
              <div class="flex items-center gap-3">
                <span>Projeto</span>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                  d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
            <div class="flex items-center justify-between font-bold">
              <span>Progresso</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                  d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
            <div class="flex items-center justify-between font-bold">
              <span>Data inicial</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                  d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
            <div class="flex items-center justify-between font-bold">
              <span>Data Final</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                  d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
            <div class="flex items-center justify-between font-bold">
              <span>Ações</span>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white" v-for="(data, index) in data_mock" :key="data?.id">
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center ">
            <div class="flex items-center gap-2">
              <div
                class="bg-[#F4ECFB] w-[44px] h-[44px] rounded-[8px] flex items-center justify-center text-[#013C94] font-semibold text-[16px]">
                {{ data?.latterName }}</div>
              <div>
                <h1 class="mb-0 text-[#1D1F2C] font-semibold text-[14px]">{{ data?.projectName }}</h1>
                <p class="mb-0 text-[#667085] text-[12px]">{{ data?.name }}</p>
              </div>
            </div>
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
            <div class="flex items-center gap-3">
              <div class="w-[59px] bg-[#E0E2E7] rounded-2xl">
                <div
                  :class="`w-[${data?.progress.toString()}]`, data?.progress !== '100%' ? 'bg-[#EB4335]' : 'bg-[#12B886]'"
                  class="h-[8px] rounded-2xl"></div>
              </div>
              <span :class="data?.progress !== '100%' ? 'text-[#EB4335]' : 'text-[#12B886]'"
                class="font-bold text-[12px]">{{ data.progress }}</span>
            </div>
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
            <span class="font-bold">{{ data?.initialDate }}</span>
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
            <span class="font-bold">{{ data?.endDate }}</span>
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="flex justify-between items-center border-b-2xl px-2 py-[10px]">
      <span class="text-[#667085] font-semibold text-[14px]">Exibindo 1-09 de 78</span>
      <div class="flex items-center">
        <button class="rounded-l-3xl border border-gray-200/90 px-[10px] py-[2px]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <button class="rounded-r-3xl border border-gray-200/90 px-[10px] py-[2px]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import Message from "../../Layouts/Message.vue";
import Checkbox from "primevue/checkbox";
import Toolbar from "primevue/toolbar";
import SlideUpDown from "vue3-slide-up-down";
import Button from "primevue/button";
import InputText from "primevue/inputtext";
import Textarea from "primevue/textarea";
import MultiSelect from "primevue/multiselect";
import Dropdown from "primevue/dropdown";
import ColorPicker from "primevue/colorpicker";
import InputSwitch from "primevue/inputswitch";
import Pagination from '../../Components/Pagination.vue';
import Actions from "../../Components/Tables/Actions.vue";
import Delete from "../../Components/Modals/Delete.vue";
import Restaurar from "../../Components/Modals/Restaurar.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { ref, defineProps, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";
import AchievementCard from "../../Layouts/CardsListagens.vue";

const data_mock = [
  { latterName: 'SR', name: 'Sosro', projectName: 'Internal CMS Tools', progress: '80%', initialDate: '19/03/2024', endDate: '25/03/2024' },
  { latterName: 'EV', name: 'Elavania', projectName: 'E-Commerce App Phase 01', progress: '100%', initialDate: '19/03/2024', endDate: '25/03/2024' },
  { latterName: 'SR', name: 'Sosro', projectName: 'Internal CMS Tools', progress: '60%', initialDate: '21/03/2024', endDate: '25/03/2024' },
  { latterName: 'EV', name: 'Elavania', projectName: 'E-Commerce App Phase 01', progress: '20%', initialDate: '21/03/2024', endDate: '25/03/2024' },
]

const _ = require("lodash");

const props = defineProps({
  dataTable: Object,

  Filtros: Object,
  Registros: Object,
});


const hasFilterClicked = ref(false);

const showFitler = () => {
  hasFilterClicked.value = !hasFilterClicked.value;
}

const showDeleteModal = ref([]);
const openDelSelect = ref(false);
const openDelTodos = ref(false);
const openRestaurarTodos = ref(false);

const searchBy = ref(getParams("searchBy") || "");

const statusValue = ref(getParams("byStatus"));

const status = [
  { label: "Ativo", code: "0" },
  { label: "Inativo", code: "1" },
];

const recordValue = ref(getParams("limit") || 10);

const orderBy = ref(["column", "sorting"]);

const toggleFilter = ref(false);
const FiltroAvancado = ref(false);
const DeleteSelect = ref(false);
const checked = ref(false);
const selected = ref([]);
const valor = ref([]);

const statusOption = [
  { name: "Ativo", value: "0" },
  { name: "Inativo", value: "1" },
];

const sortVal = {
  nome: 1,
  placa: 1,
  modelo: 1,
  ano: 1,
  cor: 1,
  valor_compra: 1,
  observacao: 1,
  status: 1,
  created_at: 1,
};

const formColumns = useForm({
  route_of_list: "list.ConfigCarros",
  columns: {
    nome: validateColumnsVisibility("nome"),
    placa: validateColumnsVisibility("placa"),
    modelo: validateColumnsVisibility("modelo"),
    ano: validateColumnsVisibility("ano"),
    cor: validateColumnsVisibility("cor"),
    valor_compra: validateColumnsVisibility("valor_compra"),
    observacao: validateColumnsVisibility("observacao"),
    status: validateColumnsVisibility("status"),
    created_at: validateColumnsVisibility("created_at"),
  },
});

const form2 = useForm({
  nome: props.Filtros?.nome || null,
  placa: props.Filtros?.placa || null,
  modelo: props.Filtros?.modelo || null,
  ano: props.Filtros?.ano || null,
  cor: props.Filtros?.cor || null,
  valor_compra: props.Filtros?.valor_compra || null,
  observacao: props.Filtros?.observacao || null,
  status: props.Filtros?.status || null,
  created_at: props.Filtros?.created_at || null,
  limparFiltros: "",
});

function validateColumnsVisibility(column) {
  let columnValue = Inertia.page.props.columnsTable?.[column];
  if (typeof columnValue == "boolean") {
    return columnValue;
  }
  return true;
}

function toggleColumns() {
  formColumns.post(route("toggle.columns.tables"), {
    preserveState: true,
  });
}
function sortTable(sort) {
  if (sort) {
    return 0;
  } else {
    return 1;
  }
}

function hasFilterActived() {
  if (
    getParams("searchBy") !== null ||
    getParams("limit") !== null ||
    getParams("orderBy") !== null
  ) {
    return true;
  }
  return false;
}

function resetFilter() {
  window.history.replaceState(null, null, window.location.pathname);
  recordValue.value = 10;
  searchBy.value = "";
  Inertia.reload();
}

function del() {
  valor.value = selected.value;
  selected.value = "";
  Inertia.post(route("deleteSelected.ConfigCarros", { id: valor.value }));
}
function delTodos() {
  Inertia.post(route("deletarTodos.ConfigCarros"));
}

function RestaurarTodos() {
  Inertia.post(route("RestaurarTodos.ConfigCarros"));
}

function getFormFiltered() {
  const newForm = {};
  for (let [key, value] of Object.entries(form2)) {
    if (typeof value == "object" && value?.value) {
      newForm[key] = value.value;
    } else {
      newForm[key] = value;
    }
  }
  return newForm;
}

function setParams() {
  let data = {
    limit: recordValue?.value,
    searchBy: searchBy.value,
    byStatus: statusValue?.value?.value,
  };
  !orderBy.value?.length ? (data.orderBy = orderBy?.value) : "";
  Inertia.visit("", {
    preserveState: true,
    replace: false,
    data,
  });
}

function FiltroAvancadoAplica() {
  const submitForm = getFormFiltered();
  let data = {
    submitForm,
  };
  !orderBy.value?.length ? (data.orderBy = orderBy?.value) : "";
  submitForm.post(route("listP.ConfigCarros"), {
    replace: false,
    data,
    onSuccess: () => {
      (FiltroAvancado.value = false), window.location.reload(); // recarrega a página após a atualização
    },
  });
}

watch(
  () => props.Filtros,
  (novoValor, valorAntigo) => {
    let OrderBy = "";
    let MeuLimit = recordValue.value;
    if (novoValor !== valorAntigo) {
      if (props.Filtros.orderBy) {
        OrderBy = `&orderBy[column]=${props.Filtros.orderBy.column}&orderBy[sorting]=${props.Filtros.orderBy.sorting}`;
      }
      if (props.Filtros.limit) {
        MeuLimit = props.Filtros.limit;
      }
      const url = `${window.location.pathname}?page=1&limit=${MeuLimit}${OrderBy}`;
      window.location.replace(url);
    }
  }
);
</script>
