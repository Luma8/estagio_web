<template>
	<div class="items-center justify-center w-full">
		<div class="flex items-center justify-between">
			<div class="flex flex-col">
				<span class="font-semibold text-[14px] text-[#858585] mb-0">Bem-vind de volta, {{ $page.props.user?.name
					}}!</span>
				<h1 class="font-bold text-[20px] mb-0">Dashboard</h1>
			</div>
		</div>
		<div class="flex gap-3 mt-[24px]">
			<div class="flex-grow flex justify-between items-center py-4 px-[32px] bg-white rounded-xl">
				<div class="flex flex-col">
					<span class="text-[14px] text-[#858585]">item A</span>
					<strong class="text-[24px] font-bold">$682.5</strong>
				</div>
				<div class="flex gap-x-3">
					<div class="bg-gray-300/90 w-[9px] rounded-2xl h-[60px] flex items-end">
						<span class="w-full h-[80%] rounded-2xl bg-[#F8E329]"></span>
					</div>
					<div class="bg-gray-300/90 w-[9px] rounded-2xl h-[60px] flex items-end">
						<span class="w-full h-[30%] rounded-2xl bg-[#F8E329]"></span>
					</div>
					<div class="bg-gray-300/90 w-[9px] rounded-2xl h-[60px] flex items-end">
						<span class="w-full h-[70%] rounded-2xl bg-[#F8E329]"></span>
					</div>
					<div class="bg-gray-300/90 w-[9px] rounded-2xl h-[60px] flex items-end">
						<span class="w-full h-[90%] rounded-2xl bg-[#F8E329]"></span>
					</div>
					<div class="bg-gray-300/90 w-[9px] rounded-2xl h-[60px] flex items-end">
						<span class="w-full h-[15%] rounded-2xl bg-[#F8E329]"></span>
					</div>
				</div>
			</div>
			<div class="flex-grow py-4 bg-white rounded-xl px-[32px]">
				<div class="flex items-center gap-3">
					<div
						class="w-[56px] h-[56px] flex items-center justify-center bg-gradient-to-r from-[#F8E329] to-[#12B886] rounded-full">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
							class="w-[28px] h-[28px] text-white">
							<path
								d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
						</svg>
					</div>
					<div class="flex flex-col">
						<span class="text-[14px] text-[#858585]">item B</span>
						<strong class="text-[16px] font-bold">321</strong>
					</div>
				</div>
			</div>
			<div class="flex-grow py-4 bg-white rounded-xl px-[32px]">
				<div class="flex items-center gap-3">
					<div class="w-[56px] h-[56px] flex items-center justify-center bg-[#F4F7FE] rounded-full">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
							class="w-6 h-6 text-[#F8E329]">
							<path
								d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
						</svg>
					</div>
					<div class="flex flex-col">
						<span class="text-[14px] text-[#858585]">item C</span>
						<strong class="text-[24px] font-bold">$350.40</strong>
					</div>
				</div>
			</div>
		</div>

		<div class="w-full rounded-xl px-[44px] py-[30px] bg-white my-[24px] flex items-center justify-between">
			<div>
				<h1 class="font-bold text-[32px]">Junte-se à <br> familia Proconph</h1>
				<p class="font-[500] text-[16px] text-[#858585]">A melhor maneira de surpreender <br> os nossos clientes é a
					prestação <br> de um serviço de qualidade.</p>
				<button class="bg-[#F4FE41] flex items-center rounded-xl px-5 py-3 gap-3 mt-[20px]">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd"
							d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
							clip-rule="evenodd" />
					</svg>
					<span class="text-[16px]">Saber mais</span>
				</button>
			</div>
			<img src="images/LayoutOne/Dashboard_one.png" />
		</div>
	</div>

	<!-- Chart -->
	<div class="flex items-center justify-between gap-2">
		<div class="w-[75%] bg-white px-4 py-5 rounded-xl h-full">
			<div class="border-b-2 border-gray-300/90">
				<h1 class="mb-0 text-[18px] font-bold">Analise do Mês</h1>
			</div>
			<Chart :chart-data="chartData" :chart-options="chartOptions" type="bar" />
		</div>
		<div class="w-[25%] bg-white px-4 py-5 rounded-xl h-full">
			<div class="border-b-2 border-gray-300/90">
				<h1 class="mb-0 text-[18px] font-bold">Analise do Mês</h1>
			</div>
			<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="pie" />
		</div>
	</div>

	<!-- Table -->
	<div class="mt-[23px]">
		<div class="rounded-t-xl bg-white w-full p-4">
			<h1 class="mb-0 text-[18px] font-bold">Pedidos</h1>
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
				</tr>
			</thead>
			<tbody>
				<tr class="bg-white border-b">
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
						#000000
					</td>
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
						<div class="flex flex-col">
							<span class="text-[14px] font-[500]">John Bushmill</span>
							<span class="text-[12px] text-[#667085]">Johnb@mail.com</span>
						</div>
					</td>
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
						Landing Page
					</td>
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
						<span class="text-[12px] text-[#667085]">$121.000</span>
					</td>
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
						<span
							class="p-2 bg-[#FFF0EA] text-[red] flex items-center justify-center font-bold rounded-xl">Processando</span>
					</td>
				</tr>
			</tbody>
		</table>
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
import Chart from "../../Components/Chart.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { ref, defineProps, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";
import { useToast } from "vue-toastification";
import ModalDelete from "@/Components/Modals/Delete";
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

const chartDataPie = {
	labels: ['Item 1', 'Item 2', 'Item 3', 'Item 4'],
	datasets: [
		{
			backgroundColor: ['#41B883', '#E46651', '#00D8FF', '#DD1B16'],
			data: [40, 20, 80, 10]
		}
	]
}

const chartOptionsPie = {
	responsive: true,
	maintainAspectRatio: false
}

const chartData = {
	labels: ['2012', '2013', '2014', '2015', '2016'],
	datasets: [{
		label: 'Yellow',
		data: [12, 19, 3, 5, 2],
		backgroundColor: 'yellow'
	}, {
		label: 'Green',
		data: [8, 15, 5, 10, 4],
		backgroundColor: 'green'
	}]
}

const chartOptions = {
	scales: {
		y: {
			beginAtZero: true
		}
	}
}

const toast = useToast();

const InputsRequired = { empresa_vinculada: "", id_fixo: "", id_ordem_servico: "", data_prevista: "", data_realizada: "", tipo: "", valor: "", obs: "", created_at: "", };

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
	Inertia.visit(route('form.update.Financeiro', { id: id },), {
		preserveScroll: true,
		onSuccess: () => toast.info('Você foi redirecionado com sucesso. Após atualizar a informação desejada, você será direcionado ao Financeiro Geral. Para voltar ao Dashboard, selecione a opção no menu lateral em Dashboard.'),
	});
}

function addFinanceiro() {

	for (const formKey in InputsRequired) {
		if (form[formKey] == '') {
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
	Inertia.post(route('deleteAjax.Financeiro', { id: id },), {
		preserveScroll: true,
		onSuccess: () => toast.error('Campo apagado com sucesso!'),
	})
}


function updateFinanceiro(financeiroIndex) {
	const financeiro = props.dataTable?.data[financeiroIndex];
	const id = financeiro.id;
	Inertia.post(route('updateAjax.Financeiro', { id: id },), financeiro, {
		preserveScroll: true,
		onSuccess: () => toast.success('Campo editado com sucesso!'),
	})
}

function ExibiAlertas() {
	if (AlertaError == 1) {
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