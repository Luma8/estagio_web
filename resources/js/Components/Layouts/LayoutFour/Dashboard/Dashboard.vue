<template>
	<div class="items-center justify-center w-full">

		<div class="w-full rounded-xl my-[15px]">
			<div class="mt-[12px] flex items-center gap-[24px]">

				<div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#f0dfe8] relative  h-[136px]">
					<div class="px-[24px] py-[18px]">
						<div class="flex items-center gap-3">
							<h1 class="mb-0 font-semibold text-[28px]">56</h1>
							<span class="text-[#209F84] font-semibold text-[14px]">+4%</span>
						</div>
						<p class="text-[##3E4954] font-semibold text-[16px]">Item A</p>
					</div>
					<img class="absolute bottom-0 w-full rounded-b-2xl"
						src="images/LayoutFour/LineChart/LineChart1/Vector1.png" />
					<img class="absolute bottom-0 w-full rounded-b-2xl"
						src="images/LayoutFour/LineChart/LineChart1/Vector2.png" />
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
						src="images/LayoutFour/LineChart/LineChart2/Vector1.png" />
					<img class="absolute bottom-0 w-full rounded-b-2xl"
						src="images/LayoutFour/LineChart/LineChart2/Vector2.png" />
				</div>

				<div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#f0dfe8] relative h-[136px]">
					<div class="px-[24px] py-[18px]">
						<div class="flex items-center gap-3">
							<h1 class="mb-0 font-semibold text-[28px]">56</h1>
							<span class="text-[#D22626] font-semibold text-[14px]">-3%</span>
						</div>
						<p class="text-[##3E4954] font-semibold text-[16px]">Item C</p>
					</div>
					<img class="absolute bottom-0 w-full rounded-b-2xl"
						src="images/LayoutFour/LineChart/LineChart3/Vector1.png" />
					<img class="absolute bottom-0 w-full rounded-b-2xl"
						src="images/LayoutFour/LineChart/LineChart3/Vector2.png" />
				</div>

				<div class="flex flex-col flex-grow py-[16px] rounded-2xl bg-[#f0dfe8] relative h-[136px]">
					<div class="px-[24px] py-[18px]">
						<div class="flex items-center gap-3">
							<h1 class="mb-0 font-semibold text-[28px]">$623,731</h1>
							<span class="text-[#D22626] font-semibold text-[14px]">-3,7%</span>
						</div>
						<p class="text-[##3E4954] font-semibold text-[16px]">Item D</p>
					</div>
					<img class="absolute bottom-0 w-full rounded-b-2xl"
						src="images/LayoutFour/LineChart/LineChart4/Vector1.png" />
					<img class="absolute bottom-0 w-full rounded-b-2xl"
						src="images/LayoutFour/LineChart/LineChart4/Vector2.png" />
				</div>

			</div>
		</div>
	</div>

	<!-- Chart -->
	<div class="flex items-center gap-3">
		<div class="bg-white px-4 py-5 rounded-xl w-full h-[550px]">
			<div class="flex justify-between items-center">
				<div class="flex items-center gap-3">
					<div class="w-[8px] flex items-center flex-col justify-center">
						<div class="bg-[#E14980] h-[20px] w-full rounded-2xl"></div>
						<div class="w-[3px] bg-[#FFCBDE] h-[20px]"></div>
					</div>
					<h1 class="mb-0 font-bold text-[20px]">Receita</h1>
				</div>
				<div>
					<p class="mb-0 text-[#969BA0] text-[12px]">Consulte abaixo a receita do dashboard</p>
					<p class="mb-0 flex justify-end text-[#969BA0] text-[12px]">Proconph</p>
				</div>
			</div>
			<div class="mt-[9px]">
				<p class="mb-0 text-[#969BA0] text-[12px]">Renda</p>
				<h1 class="mb-0 font-bold text-[32px]">$561,623</h1>
			</div>
			<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="line" :responsive="true" styleDynamic="w-full 2xl:h-[350px] h-[150px]"/>
		</div>
		<div class="bg-white px-4 py-5 rounded-xl w-full h-[550px]">
			<div class="flex items-center justify-between mb-[44px]">
				<div class="flex gap-3">
					<div class="w-[8px] flex items-center flex-col justify-center">
						<div class="bg-[#E14980] h-[20px] w-full rounded-2xl"></div>
						<div class="w-[3px] bg-[#FFCBDE] h-[20px]"></div>
					</div>
					<div>
						<h1 class="mb-0 font-bold text-[20px]">Vendas</h1>
						<p class="mb-0 text-[#969BA0] text-[12px]">Acompanhe as vendas do e-commerce <br> Proconph</p>
					</div>
				</div>
				<button class="p-[18px] flex gap-3 items-center border rounded-2xl border-gray-200/90">
					<span class="font-semibold">30 dias</span>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 text-[#EA4989]">
						<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
					</svg>
				</button>
			</div>
			<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="pie" :responsive="true" styleDynamic="w-full 2xl:h-[350px] h-[150px]"/>
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