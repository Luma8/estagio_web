<template>
	<div class="h-screen">
		<div class="flex items-center justify-between">
			<div>
				<h1 class="mb-0 text-[24px] font-semibold">Bem-vindo, {{ $page.props.user?.name }}!</h1>
				<p class="mb-0 text-[#777980] text-[18px]">Acesse agora sua plataforma preferida</p>
			</div>
		</div>

		<div v-if="hasFilterClicked" class="flex items-center gap-4 my-[24px]">
			<input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Projeto"
				type="text" />
			<input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Progresso"
				type="text" />
			<input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Data Inicial"
				type="text" />
			<input class="flex-grow px-[32px] py-[12px] bg-white rounded-[12px] border-0 outline-0" placeholder="Data Final"
				type="text" />
			<button class="px-[19px] py-[12px] rounded-[12px] bg-[#013C94] text-white">Aplicar</button>
		</div>

		<div class="my-[24px]">

			<div class="mt-[12px] flex items-center gap-[24px]">

				<div class="flex flex-col flex-grow rounded-2xl bg-[#1D1F2C] relative">
					<div
						class="absolute rounded-2xl z-[1] h-full w-full bg-cover bg-[url('/images/LayoutThree/Cards/Card1.png')]">
					</div>
					<div class="p-[20px] z-[2]">
						<div class="flex flex-col mb-[8px]">
							<div
								class="bg-[#383c54] w-[32px] h-[32px] flex items-center justify-center p-[9px] rounded-md text-white">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
									class="w-6 h-6 text-white">
									<path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
									<path fill-rule="evenodd"
										d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
										clip-rule="evenodd" />
									<path
										d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
								</svg>
							</div>
							<p class="mb-0 text-[16px] mt-[16px] mb-[8px] text-white">Item A</p>
						</div>
						<div class="flex gap-3 items-center">
							<h1 class="mb-0 text-[28px] text-white font-semibold">$75,500</h1>
							<span class="px-1 bg-[#383c54] text-white text-[12px] rounded-md">+10%</span>
						</div>
					</div>
				</div>

				<div class="flex flex-col flex-grow rounded-2xl bg-[#883DCF] relative">
					<div
						class="absolute rounded-2xl z-[1] h-full w-full bg-cover bg-[url('/images/LayoutThree/Cards/Card2.png')]">
					</div>
					<div class="p-[20px] z-[2]">
						<div class="flex flex-col mb-[8px]">
							<div
								class="bg-[#b06cf0] w-[32px] h-[32px] flex items-center justify-center p-[9px] rounded-md text-white">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
									<path fill-rule="evenodd"
										d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
										clip-rule="evenodd" />
								</svg>
							</div>
							<p class="mb-0 text-[16px] mt-[16px] mb-[8px] text-white">Item B</p>
						</div>
						<div class="flex gap-3 items-center">
							<h1 class="mb-0 text-[28px] text-white font-semibold">02</h1>
							<span class="px-1 bg-[#b06cf0] text-white text-[12px] rounded-md">-15%</span>
						</div>
					</div>
				</div>

				<div class="flex flex-col flex-grow rounded-2xl bg-[#3250FF] relative">
					<div
						class="absolute rounded-2xl z-[1] h-full w-full bg-cover bg-[url('/images/LayoutThree/Cards/Card3.png')]">
					</div>
					<div class="p-[20px] z-[2]">
						<div class="flex flex-col mb-[8px]">
							<div
								class="bg-[#6e80e6] w-[32px] h-[32px] flex items-center justify-center p-[9px] rounded-md text-white">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path
										d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
								</svg>
							</div>
							<p class="mb-0 text-[16px] mt-[16px] mb-[8px] text-white">Item C</p>
						</div>
						<div class="flex gap-3 items-center">
							<h1 class="mb-0 text-[28px] text-white font-semibold">$24,500</h1>
							<span class="px-1 bg-[#6e80e6] text-white text-[12px] rounded-md">-25%</span>
						</div>
					</div>
				</div>

				<div class="flex flex-col flex-grow rounded-2xl bg-[#2BB2FE] relative">
					<div
						class="absolute rounded-2xl z-[1] h-full w-full bg-cover bg-[url('/images/LayoutThree/Cards/Card4.png')]">
					</div>
					<div class="p-[20px] z-[2]">
						<div class="flex flex-col mb-[8px]">
							<div
								class="bg-[#8acdf2] w-[32px] h-[32px] flex items-center justify-center p-[9px] rounded-md text-white">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path
										d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
									<path fill-rule="evenodd"
										d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z"
										clip-rule="evenodd" />
								</svg>
							</div>
							<p class="mb-0 text-[16px] mt-[16px] mb-[8px] text-white">Item D</p>
						</div>
						<div class="flex gap-3 items-center">
							<h1 class="mb-0 text-[28px] text-white font-semibold">247</h1>
							<span class="px-1 bg-[#8acdf2] text-white text-[12px] rounded-md">0%</span>
						</div>
					</div>
				</div>

			</div>

		</div>

		<div class="flex gap-4">
			<div class="p-4 rounded-xl bg-white">
				<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="doughnut" />
			</div>
			<div class="p-4 rounded-xl bg-white flex-grow">
				<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="line" />
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
									<div
										:class="`w-[${data?.progress.toString()}]`, data?.progress !== '100%' ? 'bg-[#EB4335]' : 'bg-[#0163E0]'"
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
import Checkbox from "primevue/checkbox";
import SlideUpDown from "vue3-slide-up-down";
import Button from "primevue/button";
import InputText from "primevue/inputtext";
import Dropdown from "primevue/dropdown";
import Pagination from "../../Components/Pagination.vue";
import Actions from "../../Components/Tables/Actions.vue";
import Delete from "../../Components/Modals/Delete.vue";
import Chart from "../../Components/Chart.vue";
import ArrowVolume from "../../Components/ArrowVolume.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { ref, defineProps, watch, reactive } from "vue";
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

const data_mock = [
	{ name: 'Sosro', latterName: 'SR', projectName: 'Internal CMS Tools', progress: '80%', initialDate: '19/03/2024', endDate: '25/03/2024' },
	{ name: 'Elevania', latterName: 'EV', projectName: 'E-Commerce APp Phase 01', progress: '100%', initialDate: '21/03/2024', endDate: '27/03/2024' },
]

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
	maintainAspectRatio: false,
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

const DoughnutData = {
	labels: ['VueJs', 'EmberJs', 'ReactJs', 'AngularJs'],
	datasets: [
		{
			backgroundColor: ['#41B883', '#E46651', '#00D8FF', '#DD1B16'],
			data: [40, 20, 80, 10]
		}
	]
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