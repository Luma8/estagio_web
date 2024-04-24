<template>
  <div class="h-screen">

    <div class="flex items-center justify-between">
      <div>
        <h1 class="mb-0 text-[24px] font-semibold">Bem-vindo, {{ $page.props.user?.name }}!</h1>
        <p class="mb-0 text-[#777980] text-[18px]">Acesse agora sua plataforma preferida</p>
      </div>
      <div class="flex items-center gap-3">
        <button  @click="showFitler" :class="hasFilterClicked ? 'bg-[#192343] text-white' : 'bg-[#FFFFFF] text-[#4A4C56]'"  class="flex items-center px-[14px] py-[10px] rounded-[8px] border border-[#E0E2E7] gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z"
              clip-rule="evenodd" />
          </svg>
          <span class="text-[14px]">Filtros Avançados</span>
        </button>
        <button class="flex items-center px-[14px] py-[10px] rounded-[8px] bg-[#FFFFFF] border border-[#E0E2E7] gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6 text-[#858585]">
            <path fill-rule="evenodd"
              d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z"
              clip-rule="evenodd" />
          </svg>
          <span class="text-[14px] text-[#4A4C56]">Cadastro</span>
        </button>
        <button class="flex items-center px-[14px] py-[10px] rounded-[8px] bg-[#FFFFFF] border border-[#E0E2E7] gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6 text-[#858585]">
            <path
              d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
            <path fill-rule="evenodd"
              d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
              clip-rule="evenodd" />
          </svg>
          <span class="text-[14px] text-[#4A4C56]">Calendário</span>
        </button>
      </div>
    </div>

    <div v-if="hasFilterClicked" class="flex items-center gap-4 my-[24px]">
      <input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Projeto" type="text" />
      <input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Progresso" type="text" />
      <input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Data Inicial" type="text" />
      <input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Data Final" type="text" />
      <button class="px-[19px] py-[12px] rounded-[12px] bg-[#013C94] text-white">Aplicar</button>
    </div>

    <div class="my-[24px]">

      <div class="mt-[12px] flex items-center gap-[24px]">

        <div class="flex flex-col flex-grow p-[20px] rounded-2xl bg-white ">
          <div class="flex items-center justify-between mb-[8px]">
            <p class="mb-0 text-[16px] text-[#777980]">Total</p>
            <div class="bg-[#F4ECFB] p-[9px] rounded-md text-[#883DCF]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 0 1-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0 1 13.5 1.5H15a3 3 0 0 1 2.663 1.618ZM12 4.5A1.5 1.5 0 0 1 13.5 3H15a1.5 1.5 0 0 1 1.5 1.5H12Z"
                  clip-rule="evenodd" />
                <path
                  d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 0 1 9 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0 1 16.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625v-12Z" />
                <path
                  d="M10.5 10.5a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963 5.23 5.23 0 0 0-3.434-1.279h-1.875a.375.375 0 0 1-.375-.375V10.5Z" />
              </svg>
            </div>
          </div>
          <h1 class="mb-0 text-[32px] font-semibold">6,784</h1>
        </div>

        <div class="flex flex-col flex-grow p-[20px] rounded-2xl bg-white">
          <div class="flex items-center justify-between mb-[8px]">
            <p class="mb-0 text-[16px] text-[#777980]">Ativo</p>
            <div class="bg-[#FFF0EA] p-[9px] rounded-md text-[#F86624]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </div>
          <h1 class="mb-0 text-[32px] font-semibold">1,920</h1>
        </div>

        <div class="flex flex-col flex-grow p-[20px] rounded-2xl bg-white">
          <div class="flex items-center justify-between mb-[8px]">
            <p class="mb-0 text-[16px] text-[#777980]">Inativo</p>
            <div class="bg-[#FEECEE] p-[9px] rounded-md text-[#EB3D4D]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </div>
          <h1 class="mb-0 text-[32px] font-semibold">5,329</h1>
        </div>

        <div class="flex flex-col flex-grow p-[20px] rounded-2xl bg-white">
          <div class="flex items-center justify-between mb-[8px]">
            <p class="mb-0 text-[16px] text-[#777980]">Esse mês</p>
            <div class="bg-[#E9FAF7] p-[9px] rounded-md text-[#22CAAD]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </div>
          <h1 class="mb-0 text-[32px] font-semibold">50%</h1>
        </div>

      </div>

    </div>

    <div class="bg-white p-[24px] rounded-t-2xl flex items-center justify-between mt-[20px]">
      <h1 class="font-semibold text-[20px]">Projetos Recentes</h1>
      <div class="flex items-center gap-3">
        <button
          class="flex items-center justify-center gap-3 px-[16px] py-[12px] bg-white rounded-xl border border-[#E0E2E7] text-[#858D9D]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
              clip-rule="evenodd" />
          </svg>
          <span>Excluir</span>
        </button>
        <button
          class="flex items-center justify-center gap-3 px-[16px] py-[12px] bg-white rounded-xl border border-[#E0E2E7] text-[#858D9D]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z"
              clip-rule="evenodd" />
          </svg>
          <span>Atualizar</span>
        </button>
      </div>
    </div>
    <div class="overflow-y-auto">
      <table class="min-w-full">
        <thead class="border-b bg-[#F9F9FC]">
          <tr>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
              Projeto
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
              <div class="flex items-center justify-between">
                <span>Progresso</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
              <div class="flex items-center justify-between">
                <span>Data Incial</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
              <div class="flex items-center justify-between">
                <span>Data Final</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white" v-for="data in data_mock" :key="data?.id">
            <td class="text-sm text-gray-900 flex items-center gap-3 font-light px-6 py-4 whitespace-nowrap ">
              <div class="flex items-center gap-3">
                <div class="p-[10px] bg-[#F4ECFB] text-center rounded-xl">
                  <span>{{ data?.latterName }}</span>
                </div>
                <div>
                  <h1 class="mb-0 font-semibold">{{ data?.projectName }}</h1>
                  <p class="mb-0 text-[#667085] text-[12px]">{{ data?.name }}</p>
                </div>
              </div>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <div class="flex items-center gap-3">
                <div class="w-[59px] bg-[#E0E2E7] rounded-2xl">
                  <div :class="`w-[${data?.progress}]`, data?.progress !== '100%' ? 'bg-[#EB4335]' : 'bg-[#0163E0]'"
                    class="h-[8px] rounded-2xl"></div>
                </div>
                <span :class="data?.progress !== '100%' ? 'text-[#EB4335]' : 'text-[#0163E0]'"
                  class="font-bold text-[12px]">{{ data.progress }}</span>
              </div>
            </td>
            <td class="text-[#667085] text-[14px] font-light px-6 py-4 whitespace-nowrap">
              {{ data?.initialDate }}
            </td>
            <td class="text-[#667085] text-[14px] font-light px-6 py-4 whitespace-nowrap">
              <span>{{ data?.endDate }}</span>
            </td>
          </tr>
        </tbody>
      </table>
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
	{ name: 'Sosro', latterName: 'SR', projectName: 'Internal CMS Tools', progress: '80%', initialDate: '19/03/2024', endDate: '25/03/2024' },
	{ name: 'Elevania', latterName: 'EV', projectName: 'E-Commerce APp Phase 01', progress: '100%', initialDate: '21/03/2024', endDate: '27/03/2024' },
	{ name: 'Elevania', latterName: 'ED', projectName: 'Internal CMS Tools', progress: '100%', initialDate: '11/11/2023', endDate: '06/03/2024' },
	{ name: 'Elevania', latterName: 'EV', projectName: 'Internal CMS Tools', progress: '100%', initialDate: '25/03/2023', endDate: '08/01/2024' },
	{ name: 'Elevania', latterName: 'EV', projectName: 'E-Commerce APp Phase 05', progress: '100%', initialDate: '27/03/2023', endDate: '31/02/2024' },
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
