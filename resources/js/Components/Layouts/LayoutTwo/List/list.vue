<template>
  <div class="h-screen">
    <div class="flex flex-col bg-white rounded-2xl p-4">
      <div class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125Z" />
        </svg>
        <h1 class="mb-0">Visão Geral</h1>
      </div>

      <div class="mt-[12px] flex items-center gap-[24px]">

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#F1F3F5] items-center justify-center">
          <div class="w-[72px] h-[72px] rounded-full flex justify-center items-center bg-[#F06595]">
            <div class="w-[42px] h-[42px] rounded-full flex justify-center items-center bg-[#FFF0F6]">
              <span class="text-[#F06595]">02</span>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center">
            <span class="font-bold text-[20px]">Estatísticas</span>
            <p class="mb-0 text-[#868E96] text-[14px]">Total de ativos e inativos</p>
          </div>
        </div>

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#F1F3F5] items-center justify-center">
          <div class="w-[72px] h-[72px] rounded-full flex justify-center items-center bg-[#FF922B]">
            <div class="w-[42px] h-[42px] rounded-full flex justify-center items-center bg-[#FFF4E6]">
              <span class="text-[#FF922B]">02</span>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center">
            <span class="font-bold text-[20px]">Ativos</span>
            <p class="mb-0 text-[#868E96] text-[14px]">Total de registros ativos</p>
          </div>
        </div>

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#F1F3F5] items-center justify-center">
          <div class="w-[72px] h-[72px] rounded-full flex justify-center items-center bg-[#FDCB31]">
            <div class="w-[42px] h-[42px] rounded-full flex justify-center items-center bg-[#FFF9DB]">
              <span class="text-[#FDCB31]">00</span>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center">
            <span class="font-bold text-[20px]">Inativos</span>
            <p class="mb-0 text-[#868E96] text-[14px]">Total de registros inativos</p>
          </div>
        </div>

        <div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#F1F3F5] items-center justify-center">
          <div class="w-[72px] h-[72px] rounded-full flex justify-center items-center bg-[#FF6B6B]">
            <div class="w-[42px] h-[42px] rounded-full flex justify-center items-center bg-[#FFF5F5]">
              <span class="text-[#FF6B6B]">0/2</span>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center">
            <span class="font-bold text-[20px]">Esse mês</span>
            <p class="mb-0 text-[#868E96] text-[14px]">Total este mês</p>
          </div>
        </div>

      </div>

      <div class="flex items-center gap-3 mt-[16px]">
        <button class="px-[23px] py-[9px] bg-[#F1F3F5] rounded-2xl">
          <span>Cadastro</span>
        </button>
        <button class="px-[23px] py-[9px] bg-[#F1F3F5] rounded-2xl">
          <span>Calendário</span>
        </button>
        <button class="px-[23px] py-[9px] bg-[#F1F3F5] rounded-2xl">
          <span>Exportar</span>
        </button>
        <button @click="showFitler" :class="hasFilterClicked ? 'bg-[#124A41] text-white' : 'bg-[#F1F3F5]'"
          class="px-[23px] py-[9px] rounded-2xl">
          <span>Filtros Avançados</span>
        </button>
      </div>

      <div class="flex items-center gap-3 mt-[16px]" v-if="hasFilterClicked">
        <div class="rounded-2xl border-2 border-gray-300/90 flex-grow flex flex-col py-1 px-2">
          <label class="text-[#495057] text-[12px]">Nome</label>
          <input class="border-0 p-0" type="text" value="João Silva, Maria Santos">
        </div>
        <div class="rounded-2xl border-2 border-gray-300/90 flex-grow flex flex-col py-1 px-2">
          <label class="text-[#495057] text-[12px]">Gênero</label>
          <select class="p-0 border-0">
            <option>Masculino</option>
          </select>
        </div>
        <div class="rounded-2xl border-2 border-gray-300/90 flex-grow flex flex-col py-1 px-2">
          <label class="text-[#495057] text-[12px]">Status</label>
          <select class="p-0 border-0">
            <option>Ativo</option>
          </select>
        </div>
        <div class="rounded-2xl border-2 border-gray-300/90 flex-grow flex flex-col py-1 px-2">
          <label class="text-[#495057] text-[12px]">Estado</label>
          <select class="p-0 border-0">
            <option>São Paulo</option>
          </select>
        </div>
        <div class="rounded-2xl border-2 border-gray-300/90 flex-grow flex flex-col py-1 px-2">
          <label class="text-[#495057] text-[12px]">Celular</label>
          <input class="border-0 p-0" type="text" value="(11)" />
        </div>
      </div>

    </div>

    <div class="mt-4 flex flex-col max-md:px-2 py-1 rounded-lg shadow-sm">
      <div class="">
        <div class="overflow-hidden bg-[#F1F3F5] rounded-t-2xl p-4 overflow-x-visible">
          <div class="w-full flex items-center justify-between ">
            <div class="flex items-center gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
              <h1 class="font-semibold text-[14px] mb-0">Listagem</h1>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-[48px] h-[48px] bg-white rounded-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                    d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                </svg>
              </div>
              <div class="w-[48px] h-[48px] bg-white rounded-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
              <div class="w-[48px] h-[48px] bg-white rounded-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M12 5.25c1.213 0 2.415.046 3.605.135a3.256 3.256 0 0 1 3.01 3.01c.044.583.077 1.17.1 1.759L17.03 8.47a.75.75 0 1 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l3-3a.75.75 0 0 0-1.06-1.06l-1.752 1.751c-.023-.65-.06-1.296-.108-1.939a4.756 4.756 0 0 0-4.392-4.392 49.422 49.422 0 0 0-7.436 0A4.756 4.756 0 0 0 3.89 8.282c-.017.224-.033.447-.046.672a.75.75 0 1 0 1.497.092c.013-.217.028-.434.044-.651a3.256 3.256 0 0 1 3.01-3.01c1.19-.09 2.392-.135 3.605-.135Zm-6.97 6.22a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.752-1.751c.023.65.06 1.296.108 1.939a4.756 4.756 0 0 0 4.392 4.392 49.413 49.413 0 0 0 7.436 0 4.756 4.756 0 0 0 4.392-4.392c.017-.223.032-.447.046-.672a.75.75 0 0 0-1.497-.092c-.013.217-.028.434-.044.651a3.256 3.256 0 0 1-3.01 3.01 47.953 47.953 0 0 1-7.21 0 3.256 3.256 0 0 1-3.01-3.01 47.759 47.759 0 0 1-.1-1.759L6.97 15.53a.75.75 0 0 0 1.06-1.06l-3-3Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
          <div class="bg-white p-4 mt-[16px] rounded-2xl">
            <table class="min-w-full">
              <thead class="border-b">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    <input type="checkbox">
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Cliente
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    E-mail
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Celular
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Celular
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Endereço
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Ação
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b" v-for="data in data_mock" :key="data?.id">
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <input type="checkbox" />
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center">
                    <span>{{ data?.name }}</span>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <div class="flex flex-col">
                      <span>{{ data?.email }}</span>
                    </div>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ data?.phone }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <span>{{ data?.phone }}</span>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <span>
                      {{ data?.address }}
                    </span>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                          d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                      </svg>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
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
  { id: '#0001', name: 'Arthur', email: 'ArthurMorgan@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Processando', address: 'Rua 01 do 0101', phone: '(83) 0 0000-0000' },
  { id: '#0002', name: 'John', email: 'JohnMarston@gmail.com', product: 'Site Completo', product_value: '$480,00', status: 'Processando', address: 'Rua 02 do 0101', phone: '(83) 0 0000-0000' },
  { id: '#0004', name: 'Lenny', email: 'LennySummers@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Andamento', address: 'Rua 03 do 0101', phone: '(83) 0 0000-0000' },
  { id: '#0005', name: 'Dutch', email: 'DutchVanDerLide@gmail.com', product: 'Landing Page', product_value: '$120,00', status: 'Processando', address: 'Rua 04 do 0101', phone: '(83) 0 0000-0000' },
  { id: '#0006', name: 'Hosea', email: 'HoseaMathews@gmail.com', product: 'E-commerce', product_value: '$126,00', status: 'Concluido', address: 'Rua 05 do 0101', phone: '(83) 0 0000-0000' },
  { id: '#0007', name: 'Micah', email: 'MicahBell@gmail.com', product: 'Saas', product_value: '$750,00', status: 'Processando', address: 'Rua 06 do 0101', phone: '(83) 0 0000-0000' },
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
