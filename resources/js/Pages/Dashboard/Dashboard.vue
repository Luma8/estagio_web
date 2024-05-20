<template>	
	<div>
		<Home/>
	</div>
</template>



<script setup>
import Checkbox from "primevue/checkbox";
import SlideUpDown from "vue3-slide-up-down";
import Button from "primevue/button";
import InputText from "primevue/inputtext";
import Dropdown from "primevue/dropdown";
import Pagination from "../../Components/Pagination.vue";
import Actions from "../../Components/Tables/Actions.vue";
import Delete from "../../Components/Modals/Delete.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { ref, defineProps, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";  
import { useToast } from "vue-toastification";
import ModalDelete from "@/Components/Modals/Delete";
import Home from "@/Components/LPProconph/Home.vue"
const _ = require("lodash");

const props = defineProps({
dataTable: Object,
ContasAVencer: Object,
Registros: Object,
OrdemdeServico: Object,
AlertaError: Object,
});

const showDeleteModal = ref({
id: null,
show: false,
});

const AlertaError = props.AlertaError;

const searchBy = ref(getParams("searchBy") || "0");
const searchBy2 = ref(getParams("searchBy2") || "0"); 
const statusValue = ref(getParams("byStatus"));

const status = [
{ label: "Ativo", code: '0' },
{ label: "Inativo", code: '1' },
];



const toast = useToast();

const InputsRequired = { empresa_vinculada: "",id_fixo: "",id_ordem_servico: "",data_prevista: "",data_realizada: "",tipo: "",valor: "",obs: "",created_at: "", };

const form = useForm({

empresa_vinculada: "",

id_fixo: "",

id_ordem_servico: "",

data_prevista: "",

data_realizada: "",

tipo: "",

valor: "",

obs: "",

created_at: "",

});

const recordValue = ref(getParams("limit") || 10);

const orderBy = ref(["column", "sorting"]);

const toggleFilter = ref(false);
const toggleDetalhamento = ref(false);



const sortVal = {
empresa_vinculada: 1,
id_fixo: 1,
id_ordem_servico: 1,
data_prevista: 1,
data_realizada: 1,
tipo: 1,
valor: 1,
obs: 1,
created_at: 1,
};

const formColumns = useForm({
route_of_list: "list.Financeiro",
columns: {
empresa_vinculada: validateColumnsVisibility("empresa_vinculada"),
id_fixo: validateColumnsVisibility("id_fixo"),
id_ordem_servico: validateColumnsVisibility("id_ordem_servico"),
data_prevista: validateColumnsVisibility("data_prevista"),
data_realizada: validateColumnsVisibility("data_realizada"),
tipo: validateColumnsVisibility("tipo"),
valor: validateColumnsVisibility("valor"),
obs: validateColumnsVisibility("obs"),
created_at: validateColumnsVisibility("created_at"),
},
});

function validateColumnsVisibility(column) {
let columnValue = Inertia.page.props.columnsTable?.[column];
if (typeof columnValue == "boolean") {
  return columnValue;
}
return true;
}
ExibiAlertas();


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
  getParams("searchBy2") !== null ||
  getParams("limit") !== null ||
  getParams("orderBy") !== null
) {
  return true;
}
return false;
}

function setModalDeleteVal(id) {
showDeleteModal.value.id = id;
showDeleteModal.value.show = true;
}


function redirectToItem(token) {
const id = token;
Inertia.visit(route('form.update.Financeiro', {id: id}, ), {
  preserveScroll: true,
  onSuccess: () => toast.info('Você foi redirecionado com sucesso. Após atualizar a informação desejada, você será direcionado ao Financeiro Geral. Para voltar ao Dashboard, selecione a opção no menu lateral em Dashboard.'),
});
  }

function addFinanceiro() {

for (const formKey in InputsRequired) {
	if(form[formKey] == '') {
		toast.info('Todos os campos são obrigatórios!');
		return false;
	}
}


form.post(route('storeAjax.Financeiro'), {
  preserveScroll: true,
  onError: () => toast.error('Mensagem de erro.'),
  onSuccess: () => { 
	form.reset();
	toast.success("Dados armarzenados com sucesso!");      
  },
});
}



function DeleteFinanceiro(financeiroIndex) {
const id = financeiroIndex;
Inertia.post(route('deleteAjax.Financeiro', {id: id}, ), {
  preserveScroll: true,
  onSuccess: () => toast.error('Campo apagado com sucesso!'),
})
}


function updateFinanceiro(financeiroIndex) {
const financeiro =  props.dataTable?.data[financeiroIndex]; 
const id = financeiro.id;
Inertia.post(route('updateAjax.Financeiro', {id: id}, ), financeiro, {
  preserveScroll: true,
  onSuccess: () => toast.success('Campo editado com sucesso!'),
})
}

function ExibiAlertas(){
	if(AlertaError == 1){
		toast.error('Atenção! Usuário não autorizado.'); 
		console.log('1');
	}
}

function resetFilter() {
window.history.replaceState(null, null, window.location.pathname);
recordValue.value = 10;
searchBy.value = "0";
searchBy2.value = "0";
Inertia.reload();
}

function setParams() {
let data = {
  limit: recordValue?.value,
  searchBy: searchBy.value,
  searchBy2: searchBy2.value,
  byStatus: statusValue?.value?.value,
};

!orderBy.value?.length ? (data.orderBy = orderBy?.value) : "";

Inertia.visit("", {
  preserveState: true,
  replace: false,
  data,
});
}

const setParamsWithThrottle = _.throttle(setParams, 600);
</script>