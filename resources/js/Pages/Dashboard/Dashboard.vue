<template>

	<div class="p-[44px] bg-white rounded-t-2xl">

		<div class="flex items-center justify-between">
			<div class="">
				<h1 class="font-bold text-[28px] mb-0">Bem-vindo de volta, Pedro!</h1>
				<p class="mb-0 text-gray-400/90">Dashboard /</p>
			</div>

			<div class="flex items-center gap-5">

				<img class="w-[55px] h-[55px] rounded-full" src="images/LayoutThree/placeholderUser.png" />

				<button
					class="w-[55px] h-[55px] rounded-full border border-gray-400/90 flex items-center justify-center text-gray-400/90 border border-gray-400/90">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
					</svg>
				</button>

				<button
					class="w-[55px] h-[55px] rounded-full border border-gray-400/90 flex items-center justify-center text-gray-400/90 border border-gray-400/90">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
					</svg>
				</button>

			</div>

		</div>

		<div class="border-b border-gray-400/90 mt-4 mb-6"></div>

		<h1 class="font-semibold text-[24px] text-[#0B1023]">Visão Geral</h1>
		<p class="mb-0 font-semibold text-gray-400/90">Mês passado</p>

		<div class="flex items-center gap-3 mt-[32px]">

			<div class="px-[24px] py-[11px] flex-grow flex items-center gap-3 border border-gray-300/90 rounded-xl ">
				<div class="rounded-full bg-[#EAF0FF] w-[64px] h-[64px] flex items-center justify-center text-[#1A5EFF]">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd"
							d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
							clip-rule="evenodd" />
						<path
							d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
					</svg>
				</div>
				<div class="flex flex-col">
					<p class="mb-0 text-[12px] text-gray-300/90">Usuários</p>
					<h1 class="mb-0 font-bold text-[24px]">76 mil</h1>
				</div>
			</div>

			<div class="px-[24px] py-[11px] flex-grow flex items-center gap-3 border border-gray-300/90 rounded-xl ">
				<div class="rounded-full bg-[#FFE8E0] w-[64px] h-[64px] flex items-center justify-center text-[#FE5152]">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd"
							d="M2.25 6a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V6Zm18 3H3.75v9a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V9Zm-15-3.75A.75.75 0 0 0 4.5 6v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V6a.75.75 0 0 0-.75-.75H5.25Zm1.5.75a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H7.5a.75.75 0 0 1-.75-.75V6Zm3-.75A.75.75 0 0 0 9 6v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V6a.75.75 0 0 0-.75-.75H9.75Z"
							clip-rule="evenodd" />
					</svg>
				</div>
				<div class="flex flex-col">
					<p class="mb-0 text-[12px] text-gray-300/90">Projetos concluídos</p>
					<h1 class="mb-0 font-bold text-[24px]">15</h1>
				</div>
			</div>

			<div class="px-[24px] py-[11px] flex-grow flex items-center gap-3 border border-gray-300/90 rounded-xl ">
				<div class="rounded-full bg-[#FFF4D2] w-[64px] h-[64px] flex items-center justify-center text-[#F0B708]">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd"
							d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
							clip-rule="evenodd" />
					</svg>
				</div>
				<div class="flex flex-col">
					<p class="mb-0 text-[12px] text-gray-300/90">Projetos pendentes</p>
					<h1 class="mb-0 font-bold text-[24px]">6</h1>
				</div>
			</div>

			<div class="px-[24px] py-[11px] flex-grow flex items-center gap-3 border border-gray-300/90 rounded-xl ">
				<div class="rounded-full bg-[#F2EAFF] w-[64px] h-[64px] flex items-center justify-center text-[#742EFE]">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path
							d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
					</svg>
				</div>
				<div class="flex flex-col">
					<p class="mb-0 text-[12px] text-gray-300/90">Faturamento</p>
					<h1 class="mb-0 font-bold text-[24px]">R$ 10 mil</h1>
				</div>
			</div>

		</div>

	</div>

	<div class="px-[44px] bg-white rounded-b-2xl mb-[24px]">

		<div class="flex items-center gap-[72px]">

			<button class="text-[#0B1023] text-[16px] border-b-4 boder-gray-600/90 pb-[32px]">Relatórios</button>
			<button class="text-gray-300/90 text-[16px] pb-[32px]">Pagamentos</button>
			<button class="text-gray-300/90 text-[16px] pb-[32px]">Produtos</button>

		</div>

	</div>

	<!-- Chart -->
	<div class="flex items-center gap-[24px]">
		<div class="bg-white px-4 py-5 rounded-xl w-[80%] h-[551px]">
			<div class="flex justify-between items-center">
				<div class="flex flex-col">
					<h1 class="mb-0 font-bold text-[20px]">Estatística</h1>
					<p class="mb-0 text-[#777980] text-[14px] font-semibold">Receitas e Despesas</p>
				</div>
				<div>
					<button>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd"
								d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
								clip-rule="evenodd" />
						</svg>
					</button>
				</div>
			</div>
			<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="line" :responsive="true"
				styleDynamic="w-full 2xl:h-[350px] h-[150px]" />
		</div>

		<div class="p-[33px] bg-white w-[20%] h-[551px]">
			<h1 class="pb-[15px] border-b border-gray-300/90 text-[20px] font-semibold mb-15px">Vendas recentes</h1>

			<div class="flex items-center justify-between mt-[15px]">
				<div class="flex flex-col">
					<h1 class="font-semibold text-[16px]">Creme dental</h1>
					<p class="text-[14px] text-gray-300/90">Março, 20 2024</p>
				</div>
				<h1 class="font-bold mb-0">R$ 20</h1>
			</div>

			<div class="flex items-center justify-between mt-[15px]">
				<div class="flex flex-col">
					<h1 class="font-semibold text-[16px]">Escova</h1>
					<p class="text-[14px] text-gray-300/90">Março, 20 2024</p>
				</div>
				<h1 class="font-bold mb-0">R$ 25</h1>
			</div>

			<div class="flex items-center justify-between mt-[15px]">
				<div class="flex flex-col">
					<h1 class="font-semibold text-[16px]">Fio Dental</h1>
					<p class="text-[14px] text-gray-300/90">Março, 20 2024</p>
				</div>
				<h1 class="font-bold mb-0">R$ 20</h1>
			</div>

			<div class="flex items-center justify-between mt-[15px]">
				<div class="flex flex-col">
					<h1 class="font-semibold text-[16px]">Creme dental</h1>
					<p class="text-[14px] text-gray-300/90">Março, 20 2024</p>
				</div>
				<h1 class="font-bold mb-0">R$ 20</h1>
			</div>

		</div>

	</div>

</template>

<script>
export default {
	data() {
		return {
			interval: null,
			time: null,
			dateString: null
		}
	},
	methods: {
		updateTime() {
			const now = new Date();
			// Obter as horas, minutos e segundos
			const hours = now.getHours();
			const minutes = now.getMinutes();
			const seconds = now.getSeconds();
			// Converter para formato AM/PM
			const timeString = hours >= 12 ? 'PM' : 'AM';
			const formattedHours = hours % 12 || 12;
			const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
			const formattedSeconds = seconds < 10 ? '0' + seconds : seconds;
			// Atualizar o estado
			this.time = `${formattedHours}:${formattedMinutes}:${formattedSeconds} ${timeString}`;
		},
		updateDateString() {
			const now = new Date();
			// Obter o dia da semana, dia do mês, mês e ano
			const daysOfWeek = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
			const monthsOfYear = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
			const dayOfWeek = daysOfWeek[now.getDay()];
			const dayOfMonth = now.getDate();
			const month = monthsOfYear[now.getMonth()];
			const year = now.getFullYear();
			// Construir a string de data
			this.dateString = `${dayOfWeek}, ${dayOfMonth} de ${month} de ${year}`;
		}
	},
	created() {
		// Atualizar o tempo a cada segundo
		this.interval = setInterval(() => {
			this.updateTime();
		}, 1000);

		// Atualizar a string de data a cada segundo
		this.interval = setInterval(() => {
			this.updateDateString();
		}, 1000);
	},
	beforeDestroy() {
		// Prevenir vazamento de memória
		clearInterval(this.interval);
	}
}
</script>



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

const data_mock = [
	{ latterName: 'SR', name: 'Sosro', projectName: 'Internal CMS Tools', progress: '80%', initialDate: '19/03/2024', endDate: '25/03/2024' },
	{ latterName: 'EV', name: 'Elavania', projectName: 'E-Commerce App Phase 01', progress: '100%', initialDate: '19/03/2024', endDate: '25/03/2024' },
	{ latterName: 'SR', name: 'Sosro', projectName: 'Internal CMS Tools', progress: '60%', initialDate: '21/03/2024', endDate: '25/03/2024' },
	{ latterName: 'EV', name: 'Elavania', projectName: 'E-Commerce App Phase 01', progress: '20%', initialDate: '21/03/2024', endDate: '25/03/2024' },
]

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