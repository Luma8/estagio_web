<template>
  <div class="h-screen overflow-y-auto">

    <div class="flex items-center justify-between">
      <div class="flex flex-col">
        <p class="text-[#C2C6CE] mb-[8px] text-[18px] ">Dashboard</p>
        <h1 class="text-white text-[23px] font-semibold mb-[14px]">Seja bem-vindo!</h1>
      </div>
      <div class="flex items-center gap-3">
        <button @click="showFitler" :class="hasFilterClicked ? 'bg-[#0365F8]' : 'bg-white'"
          class="flex items-center gap-3 px-[23px] rounded-3xl py-[10px]">
          <span :class="hasFilterClicked ? 'text-white' : 'text-[#4A4C56]'" class="font-semibold text-[14px] ">Filtros
            Avançados</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            :class="hasFilterClicked ? 'text-white' : 'text-[#0365F8]'" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <button class="flex items-center gap-3 px-[23px] rounded-3xl py-[10px] bg-white">
          <span class="font-semibold text-[14px] text-[#4A4C56]">Cadastro</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6 text-[#0365F8]">
            <path fill-rule="evenodd"
              d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <button class="flex items-center gap-3 px-[23px] rounded-3xl py-[10px] bg-white">
          <span class="font-semibold text-[14px] text-[#4A4C56]">Exportar</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6 text-[#0365F8]">
            <path
              d="M11.47 1.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1-1.06 1.06l-1.72-1.72V7.5h-1.5V4.06L9.53 5.78a.75.75 0 0 1-1.06-1.06l3-3ZM11.25 7.5V15a.75.75 0 0 0 1.5 0V7.5h3.75a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h3.75Z" />
          </svg>
        </button>
      </div>
    </div>

    <div v-if="hasFilterClicked" class="p-[24px] gap-5 flex items-center bg-white my-[24px] rounded-2xl">

      <div class="flex flex-col flex-grow">
        <label class="text-[#858585] text-[16px]">ID</label>
        <input
          class="placeholder:text-[#998AA6] outline-0 border-0 px-[20px] py-[12px] rounded-xl bg-gray-200/90 w-full text-[#998AA6]"
          placeholder="0000" type="text">
      </div>

      <div class="flex flex-col flex-grow">
        <label class="text-[#858585] text-[16px]">ID</label>
        <input
          class="placeholder:text-[#998AA6] outline-0 border-0 px-[20px] py-[12px] rounded-xl bg-gray-200/90 w-full text-[#998AA6]"
          placeholder="0000" type="text">
      </div>

      <div class="flex flex-col flex-grow">
        <label class="text-[#858585] text-[16px]">Data</label>
        <input
          class="placeholder:text-[#998AA6] outline-0 border-0 px-[20px] py-[12px] rounded-xl bg-gray-200/90 w-full text-[#998AA6]"
          placeholder="0000" type="text">
      </div>

      <div class="flex flex-col flex-grow">
        <label class="text-[#858585] text-[16px]">Tipo</label>
        <input
          class="placeholder:text-[#998AA6] outline-0 border-0 px-[20px] py-[12px] rounded-xl bg-gray-200/90 w-full text-[#998AA6]"
          placeholder="0000" type="text">
      </div>

      <div class="flex flex-col">
        <label class="text-white text-[16px]">&</label>
        <button class="text-white bg-[#013C94] px-[19px] py-[12px] rounded-[12px]">
          Filtrar
        </button>
      </div>

    </div>

    <div class="px-2 py-3 bg-white rounded-3xl">
      <table class="rounded-3xl min-w-full table-auto">
        <thead class="border-b rounded-3xl">
          <tr class="bg-white rounded-3xl">
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1  pb-5 text-left font-bold">
              <div class="flex items-center justify-between font-bold">
                <div class="flex items-center gap-3">
                  <Checkbox v-model="checked" :binary="true" />
                  <span>ID</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1  pb-5 text-left font-bold">
              <div class="flex items-center justify-between font-bold">
                <span>Nome</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1  pb-5 text-left font-bold">
              <div class="flex items-center justify-between font-bold">
                <span>Endereço</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1  pb-5 text-left font-bold">
              <div class="flex items-center justify-between font-bold">
                <span>Data</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1  pb-5 text-left font-bold">
              <div class="flex items-center justify-between font-bold">
                <span>Status</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd"
                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1  pb-5 text-left font-bold">
              <span>Ações</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b" v-for="(data, index) in data_mock" :key="data?.id">
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center ">
              <div class="flex items-center gap-3">
                <Checkbox v-model="checked" :binary="true" />
                <span class="font-bold">{{ data?.id }}</span>
              </div>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
              <span class="font-bold">{{ data?.name }}</span>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
              <span class="font-bold">{{ data?.address }}</span>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
              <span class="font-bold">{{ data?.date }}</span>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
              <div :class="[
                data?.status === 'Concluído' ? 'bg-[#8ceddf] text-[#00B69B]' : '',
                data?.status === 'Em processo' ? 'bg-[#cbb6fa] text-[#6226EF]' : '',
                data?.status === 'Rejeitada' ? 'bg-[#f0aba1] text-[#EF3826]' : ''
              ]" class="w-[97px] h-[25px] text-[12px] flex items-center justify-center rounded-[8px] font-bold">
                {{ data?.status }}
              </div>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6 text-[#0365F8]">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
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
  { id: '00001', name: 'Chrisstiane', address: '083 Kutch Green Apt, 448', date: '04 Sep 2024', status: 'Concluído' },
  { id: '00002', name: 'Rosie Pearson', address: '979 Immanuel Ferry Suite 526', date: '28 May 2023', status: 'Em processo' },
  { id: '00003', name: 'Darrell Caldwell', address: '8587 Frida Ports', date: '23 Nov 2023', status: 'Rejeitada' },
  { id: '00004', name: 'Gilbert Johnston', address: '768 Destiny Lake Suite 600', date: '05 Feb 2023', status: 'Concluído' },
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
