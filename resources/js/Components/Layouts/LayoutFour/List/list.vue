<template>
  <div class="h-screen overflow-y-auto">
    <div class="w-full rounded-xl my-[15px]">
      <div class="mt-[12px] flex items-center gap-[24px]">

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#f0dfe8] relative  h-[136px]">
          <div class="px-[24px] py-[18px]">
            <div class="flex items-center gap-3">
              <h1 class="mb-0 font-semibold text-[28px]">56</h1>
              <span class="text-[#209F84] font-semibold text-[14px]">+4%</span>
            </div>
            <p class="text-[##3E4954] font-semibold text-[16px]">Total</p>
            <div class="bg-[#F8F8F8] rounded-2xl h-[9px] mt-[10px]">
              <div class="bg-[#FB3E7A] w-[80%] rounded-2xl h-[9px]" />
            </div>
          </div>
        </div>

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#f0dfe8] relative h-[136px]">
          <div class="px-[24px] py-[18px]">
            <div class="flex items-center gap-3">
              <h1 class="mb-0 font-semibold text-[28px]">785</h1>
              <span class="text-[#209F84] font-semibold text-[14px]">+2,7%</span>
            </div>
            <p class="text-[##3E4954] font-semibold text-[16px]">Item B</p>
          </div>
          <img class="absolute bottom-0 w-full rounded-b-2xl"
            src="images/LayoutFour/LineChart/LineChartList/Vector1.png" />
          <img class="absolute bottom-0 w-full rounded-b-2xl"
            src="images/LayoutFour/LineChart/LineChartList/Vector2.png" />
        </div>

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#f0dfe8] relative h-[136px]">
          <div class="px-[24px] py-[18px] z-[2]">
            <div class="flex items-center gap-3">
              <h1 class="mb-0 font-semibold text-[28px]">56</h1>
              <span class="text-[#D22626] font-semibold text-[14px]">-3%</span>
            </div>
            <p class="text-[##3E4954] font-semibold text-[16px]">Inativo</p>
          </div>
          <img class="absolute bottom-0 w-full rounded-b-2xl z-[1]"
            src="images/LayoutFour/LineChart/LineChartList/Vector3.png" />
        </div>

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#f0dfe8] relative h-[136px]">
          <div class="px-[24px]">
            <div class="flex items-center justify-between">
              <img src="images/LayoutFour/pieChart.png" />
              <div>
                <h1 class="flex justify-end mb-[19px] font-bold">Esse mês</h1>
                <div class="flex items-center gap-4 mb-[14px]">
                  <div class="flex items-center gap-2">
                    <div class="bg-[#FB3E7A] w-[9px] h-[9px]"></div>
                    <span class="font-bold">Ticket A</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <div class="bg-[#0E8A74] w-[9px] h-[9px]"></div>
                    <span class="font-bold">Ticket C</span>
                  </div>
                </div>
                <div class="flex items-center gap-4">
                  <div class="flex items-center gap-2">
                    <div class="bg-[#3C65F5] w-[9px] h-[9px]"></div>
                    <span class="font-bold">Ticket B</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <div class="bg-[#FF7B31] w-[9px] h-[9px]"></div>
                    <span class="font-bold">Ticket D</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="mt-4 flex flex-col max-md:px-2 py-1 rounded-lg shadow-sm">
      <div class="">
        <div class="overflow-hidden bg-[#F1F3F5] rounded-t-2xl p-4 overflow-x-visible">
          <div class="w-full flex items-center justify-between ">
            <div
              class="flex items-center justify-between w-[567px] gap-3 px-[29px] py-[12px] border border-gray-200/90 rounded-3xl">
              <input type="text" placeholder="Pesquisar Produto..."
                class=" placeholder:text-[#969BA0] w-full p-0 outline-0 border-0 bg-transparent" />
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#A4A4A4]">
                <path fill-rule="evenodd"
                  d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <div class="flex items-center gap-3">
              <div>
                <button @click="showFitler"
                  class="px-[35px] py-[12px] border border-[#EA4989] rounded-3xl flex gap-4 items-center text-[#EA4989]">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-[20px] h-[20px]">
                    <path fill-rule="evenodd"
                      d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z"
                      clip-rule="evenodd" />
                  </svg>
                  <span>Filtros</span>
                </button>
                <div class="w-[406px] rounded-xl p-3 absolute bg-white h-auto" v-if="hasFilterClicked">
                  <h1 class="border-b-2 border-gray-300/90">Colunas</h1>
                  <div class="my-4 flex flex-col gap-y-3">
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>ID</label>
                    </div>
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>Nome</label>
                    </div>
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>Produto</label>
                    </div>
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>Total</label>
                    </div>
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>Endereço</label>
                    </div>
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>Status</label>
                    </div>
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>Imposto</label>
                    </div>
                    <div class="flex gap-2">
                      <input type="checkbox">
                      <label>Ação</label>
                    </div>
                  </div>
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
                  </div>
                  <button class="w-full py-3 rounded-xl bg-[#EC4166]">
                    <span class="font-bold text-[14px] text-white">Aplicar</span>
                  </button>
                </div>
              </div>
              <button
                class="px-[35px] py-[12px] border border-[#EA4989] rounded-3xl flex gap-4 items-center text-[#EA4989]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-[20px] h-[20px]">
                  <path
                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                  <path
                    d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                </svg>
                <span>Exportar</span>
              </button>
              <button class="w-[48px] h-[48px] bg-[#EA4989] text-white rounded-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M12 5.25c1.213 0 2.415.046 3.605.135a3.256 3.256 0 0 1 3.01 3.01c.044.583.077 1.17.1 1.759L17.03 8.47a.75.75 0 1 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l3-3a.75.75 0 0 0-1.06-1.06l-1.752 1.751c-.023-.65-.06-1.296-.108-1.939a4.756 4.756 0 0 0-4.392-4.392 49.422 49.422 0 0 0-7.436 0A4.756 4.756 0 0 0 3.89 8.282c-.017.224-.033.447-.046.672a.75.75 0 1 0 1.497.092c.013-.217.028-.434.044-.651a3.256 3.256 0 0 1 3.01-3.01c1.19-.09 2.392-.135 3.605-.135Zm-6.97 6.22a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.752-1.751c.023.65.06 1.296.108 1.939a4.756 4.756 0 0 0 4.392 4.392 49.413 49.413 0 0 0 7.436 0 4.756 4.756 0 0 0 4.392-4.392c.017-.223.032-.447.046-.672a.75.75 0 0 0-1.497-.092c-.013.217-.028.434-.044.651a3.256 3.256 0 0 1-3.01 3.01 47.953 47.953 0 0 1-7.21 0 3.256 3.256 0 0 1-3.01-3.01 47.759 47.759 0 0 1-.1-1.759L6.97 15.53a.75.75 0 0 0 1.06-1.06l-3-3Z"
                    clip-rule="evenodd" />
                </svg>
              </button>

            </div>
          </div>
          <table class="min-w-full mt-[24px]">
            <thead class="border-b">
              <tr class="rounded-t-lg bg-white">
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                  <div class="flex items-center gap-3">
                    <Checkbox v-model="checked" :binary="true" />
                    <span>ID</span>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                  <div class="flex items-center justify-between font-bold">
                    <span>Produto</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                  <div class="flex items-center justify-between font-bold">
                    <span>Data</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                  <div class="flex items-center justify-between font-bold">
                    <span>Cliente</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                  <div class="flex items-center justify-between font-bold">
                    <span>Total</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                  <span>Pagamento</span>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                  Ação
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b" v-for="(data, index) in data_mock" :key="data?.id"
                :class="index % 2 === 0 ? 'bg-[#F9F9FC]' : 'bg-white'">
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center">
                  <div class="flex items-center gap-3">
                    <Checkbox v-model="checked" :binary="true" />
                    <span>{{ data?.id }}</span>
                  </div>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <div class="flex gap-3 items-center">
                    <div class="w-[44px] h-[44px] rounded-xl bg-[#E0E2E7]"></div>
                    <div class="flex flex-col">
                      <h1 class="mb-0 text-[14px] font-semibold">{{ data?.productName }}</h1>
                      <p class="mb-0 font-[400] text-[12px]">+3 produtos</p>
                    </div>
                  </div>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ data?.date }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <span>{{ data?.name }}</span>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <span>
                    {{ data?.price }}
                  </span>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <span>
                    {{ data?.cardFlag }}
                  </span>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6 text-[#EA4989]">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="flex justify-between items-center border-b-2xl px-[24px] py-[19px] bg-white">
            <span class="text-[#667085] font-semibold text-[14px]">Mostrando 1-10 de 100</span>
            <div class="flex items-center gap-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#EA4989]">
                <path fill-rule="evenodd"
                  d="M10.72 11.47a.75.75 0 0 0 0 1.06l7.5 7.5a.75.75 0 1 0 1.06-1.06L12.31 12l6.97-6.97a.75.75 0 0 0-1.06-1.06l-7.5 7.5Z"
                  clip-rule="evenodd" />
                <path fill-rule="evenodd"
                  d="M4.72 11.47a.75.75 0 0 0 0 1.06l7.5 7.5a.75.75 0 1 0 1.06-1.06L6.31 12l6.97-6.97a.75.75 0 0 0-1.06-1.06l-7.5 7.5Z"
                  clip-rule="evenodd" />
              </svg>
              <div class="flex items-center gap-3">
                <div class="w-[43px] h-[43px] flex items-center justify-center rounded-[4px] bg-[#EA4989] text-white">1
                </div>
                <div class="w-[43px] h-[43px] flex items-center justify-center rounded-[4px] bg-[#EDEDED]">2</div>
                <div class="w-[43px] h-[43px] flex items-center justify-center rounded-[4px] bg-[#EDEDED]">3</div>
                <div class="w-[43px] h-[43px] flex items-center justify-center rounded-[4px] bg-[#EDEDED]">4</div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#EA4989]">
                <path fill-rule="evenodd"
                  d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                  clip-rule="evenodd" />
                <path fill-rule="evenodd"
                  d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </div>
        </div>
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
  { date: '29 Dec 2022', price: '$ 121.000', cardFlag: 'Visa', productName: 'Handmade Pouch', id: '#0001', name: 'Arthur', email: 'ArthurMorgan@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Processando', address: 'Rua 01 do 0101', phone: '(83) 0 0000-0000' },
  { date: '12 Nov 2022', price: '$ 590.000', cardFlag: 'Mastercard', productName: 'Handsomejack', id: '#0002', name: 'John', email: 'JohnMarston@gmail.com', product: 'Site Completo', product_value: '$480,00', status: 'Processando', address: 'Rua 02 do 0101', phone: '(83) 0 0000-0000' },
  { date: '14 Set 2022', price: '$ 121.000', cardFlag: 'Visa', productName: 'SmartWatch E2', id: '#0004', name: 'Lenny', email: 'LennySummers@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Andamento', address: 'Rua 03 do 0101', phone: '(83) 0 0000-0000' },
  { date: '04 Dec 2022', price: '$ 348.000', cardFlag: 'Mastercard', productName: 'SmartWatch E1', id: '#0005', name: 'Dutch', email: 'DutchVanDerLide@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Processando', address: 'Rua 04 do 0101', phone: '(83) 0 0000-0000' },
  { date: '02 Fev 2022', price: '$ 121.000', cardFlag: 'Visa', productName: 'HeadPhone G1 Pro', id: '#0006', name: 'Hosea', email: 'HoseaMathews@gmail.com', product: 'E-commerce', product_value: '$126,00', status: 'Concluido', address: 'Rua 05 do 0101', phone: '(83) 0 0000-0000' },
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
