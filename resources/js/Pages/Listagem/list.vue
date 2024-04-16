<template>
  <div class="h-screen">
    <div class="flex items-center justify-between">
      <div>
        <span class="font-semibold text-[14px] text-[#858585] mb-0">Bem-vind de volta, {{ $page.props.user?.name
          }}!</span>
        <h1 class="font-bold text-[20px]">Listagem</h1>
      </div>
      <div class="flex gap-3">
        <button
          class="w-[142px] bg-[#F4FE41] text-[16px] font-semibold rounded-[12px] flex items-center justify-center h-[46px] gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
              clip-rule="evenodd" />
          </svg>
          <span>Cadastro</span>
        </button>
        <button
          class="w-[142px] bg-[#F4FE41] text-[16px] font-semibold rounded-[12px] flex items-center justify-center h-[46px] gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path
              d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
            <path fill-rule="evenodd"
              d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
              clip-rule="evenodd" />
          </svg>
          <span>Calendário</span>
        </button>
      </div>
    </div>

    <div class="mt-[24px] flex gap-3">
      <div class="flex-grow bg-white rounded-2xl flex gap-2 p-3 items-center">
        <div class="bg-[#F4F7FE] rounded-full w-[50px] h-[50px] flex items-center justify-center">
          <span class="text-[#F8E329] text-[20px] font-bold">02</span>
        </div>
        <div class="flex flex-col">
          <p class="mb-0 text-[16px] font-bold text-gray-400/90">Ativos e Inativos</p>
          <h1 class="text-[18px] font-bold">Total</h1>
        </div>
      </div>
      <div class="flex-grow bg-white rounded-2xl flex gap-2 p-3 items-center">
        <div class="bg-[#F4F7FE] rounded-full w-[50px] h-[50px] flex items-center justify-center">
          <span class="text-[#F8E329] text-[20px] font-bold">02</span>
        </div>
        <div class="flex flex-col">
          <p class="mb-0 text-[16px] font-bold text-gray-400/90">Ativos</p>
          <h1 class="text-[18px] font-bold">Total</h1>
        </div>
      </div>
      <div class="flex-grow bg-white rounded-2xl flex gap-2 p-3 items-center">
        <div class="bg-[#F4F7FE] rounded-full w-[50px] h-[50px] flex items-center justify-center">
          <span class="text-[#F8E329] text-[20px] font-bold">00</span>
        </div>
        <div class="flex flex-col">
          <p class="mb-0 text-[16px] font-bold text-gray-400/90">Inativos</p>
          <h1 class="text-[18px] font-bold">Total</h1>
        </div>
      </div>
      <div class="flex-grow bg-white rounded-2xl flex gap-2 p-3 items-center">
        <div class="bg-[#F4F7FE] rounded-full w-[50px] h-[50px] flex items-center justify-center">
          <span class="text-[#F8E329] text-[20px] font-bold">0/2</span>
        </div>
        <div class="flex flex-col">
          <p class="mb-0 text-[16px] font-bold text-gray-400/90">Este Mês</p>
          <h1 class="text-[18px] font-bold">Total</h1>
        </div>
      </div>
    </div>

    <div class="mt-4 flex flex-col max-md:px-2 py-1 rounded-lg shadow-sm">
      <div class="">
        <div class="overflow-hidden overflow-x-visible">
          <div class="w-full bg-white p-4 flex items-center justify-between rounded-t-2xl">
            <h1 class="font-semibold text-[18px]">Pedidos</h1>
            <div class="flex items-center gap-3">
              <button class="border-2 border-gray-200/90 rounded-2xl p-2 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                </svg>
                <span class="text-[14px]">Filtros Avançados</span>
              </button>
              <button
                class="w-[142px] bg-[#F4FE41] text-[16px] font-semibold rounded-[12px] flex items-center justify-center h-[46px] gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M11.47 1.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1-1.06 1.06l-1.72-1.72V7.5h-1.5V4.06L9.53 5.78a.75.75 0 0 1-1.06-1.06l3-3ZM11.25 7.5V15a.75.75 0 0 0 1.5 0V7.5h3.75a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h3.75Z" />
                </svg>
                <span class="text-[14px]">Exportar</span>
              </button>
            </div>
          </div>
          <table class="min-w-full">
            <thead class="bg-[#FFF4C0] border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  ID
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Nome
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Produto
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Total
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Status
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Ação
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-white border-b" v-for="data in data_mock" :key="data?.id">
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center">
                  <input type="checkbox" />
                  <span>{{ data?.id }}</span>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <div class="flex flex-col">
                    <span class="text-[14px] font-bold">{{ data?.name }}</span>
                    <span class="text-[12px] text-[#667085]">{{ data?.email }}</span>
                  </div>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ data?.product }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <span class="text-[12px] text-[#667085]">{{ data?.product_value }}</span>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <span v-bind:class="[
                    data?.status === 'Processando' ? 'bg-[#FFF0EA] text-[#F86624]' : '',
                    data?.status === 'Concluido' ? 'bg-[#E9FAF7] text-[#1A9882]' : '',
                    data?.status === 'Andamento' ? 'bg-[#FCFFDB] text-[#D9E500]' : ''
                  ]" class="p-2 flex items-center justify-center font-bold rounded-xl">
                    {{ data?.status }}
                  </span>
                </td>
                <td
                  class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex items-center gap-3 justify-end">
                  <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                      class="w-5 h-5 text-gray-300/90">
                      <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                      <path fill-rule="evenodd"
                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                        clip-rule="evenodd" />
                    </svg>
                  </button>
                  <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                      class="w-5 h-5 text-gray-300/90">
                      <path fill-rule="evenodd"
                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                        clip-rule="evenodd" />
                    </svg>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="rounded-b-2xl flex items-center justify-between bg-white p-4">
            <span class="text-[#667085] text-[14px]">Showing 1-5 from 100</span>
            <div class="flex items-center gap-3">
              <button
                class="w-[32px] h-[32px] flex items-center justify-center rounded-[5px] bg-[#FCF8E6] text-[#F8E329]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
              <button
                class="w-[32px] h-[32px] flex items-center justify-center rounded-[5px] bg-[#F8E329] text-white">
                <span>1</span>
              </button>
              <button
                class="w-[32px] h-[32px] flex items-center justify-center rounded-[5px] bg-[#FCF8E6] text-[#F8E329]">
                <span>2</span>
              </button>
              <button
                class="w-[32px] h-[32px] flex items-center justify-center rounded-[5px] bg-[#FCF8E6] text-[#F8E329]">
                <span>3</span>
              </button>
              <button
                class="w-[32px] h-[32px] flex items-center justify-center rounded-[5px] bg-[#FCF8E6] text-[#F8E329]">
                <span>...</span>
              </button>
              <button
                class="w-[32px] h-[32px] flex items-center justify-center rounded-[5px] bg-[#FCF8E6] text-[#F8E329]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
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
  { id: '#0001', name: 'Arthur', email: 'ArthurMorgan@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Processando' },
  { id: '#0002', name: 'John', email: 'JohnMarston@gmail.com', product: 'Site Completo', product_value: '$480,00', status: 'Processando' },
  { id: '#0004', name: 'Lenny', email: 'LennySummers@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Andamento' },
  { id: '#0005', name: 'Dutch', email: 'DutchVanDerLide@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Processando' },
  { id: '#0006', name: 'Hosea', email: 'HoseaMathews@gmail.com', product: 'E-commerce', product_value: '$126,00', status: 'Concluido' },
  { id: '#0007', name: 'Micah', email: 'MicahBell@gmail.com', product: 'Saas', product_value: '$750,00', status: 'Processando' },
]

const _ = require("lodash");

const props = defineProps({
  dataTable: Object,

  Filtros: Object,
  Registros: Object,
});

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
