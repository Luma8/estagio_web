<template>
	<div class="items-center justify-center w-full z-[3]">
		<div class="flex items-center justify-between">
			<div class="flex flex-col">
				<h1 class="text-[23px] font-bold">Dashboard</h1>
				<p class="text-[#969BA0] mb-[8px] text-[18px] ">Bem-vindo ao Proconph Admin!</p>
			</div>
			<div class="flex flex-col justify-end">
				<h2 class="text-[#222132] font-semibold text-[24px] flex justify-end">{{ time }}</h2>
				<p class="text-[#757971] font-[400] text-[12px]">{{ dateString }}</p>
			</div>
		</div>

		<div class="w-full rounded-xl my-[24px] z-[3]">

			<div class="mt-[12px] flex items-center gap-[24px]">

				<div class="flex relative flex-col flex-grow p-[20px] rounded-2xl bg-white relative z-[3] h-[150px]">
					<div class="flex justify-between items-center">
						<div class="flex items-center gap-3">
							<span class="font-bold text-[18px]">215</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
								class="w-6 h-6 text-[#0E8A74]">
								<path fill-rule="evenodd"
									d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
									clip-rule="evenodd" />
							</svg>
						</div>
						<span class="font-bold text-[18px]">Pedidos</span>
					</div>
					<img class="w-full bottom-0" src="images/LayoutSix/Vector1.png" />
				</div>

				<div class="flex relative flex-col flex-grow p-[20px] rounded-2xl bg-white relative z-[3] h-[150px]">
					<div class="flex justify-between items-center">
						<div class="flex items-center gap-3">
							<span class="font-bold text-[18px]">$536k</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
								class="w-6 h-6 text-[#FF3131]">
								<path fill-rule="evenodd"
									d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
									clip-rule="evenodd" />
							</svg>
						</div>
						<span class="font-bold text-[18px]">Receita</span>
					</div>
					<img class="w-full bottom-0" src="images/LayoutSix/Vector3.png" />
				</div>

				<div class="flex relative flex-col flex-grow p-[20px] rounded-2xl bg-white relative z-[3] h-[150px]">
					<div class="flex justify-between items-center">
						<div class="flex items-center gap-3">
							<span class="font-bold text-[18px]">652</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
								class="w-6 h-6 text-[#0E8A74]">
								<path fill-rule="evenodd"
									d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
									clip-rule="evenodd" />
							</svg>
						</div>
						<span class="font-bold text-[18px]">Vendas</span>
					</div>
					<img class="w-full bottom-0" src="images/LayoutSix/Group2.png" />
				</div>

				<div class="flex relative flex-col flex-grow p-[20px] rounded-2xl bg-white relative z-[3] h-[150px]">
					<div class="flex justify-between items-center">
						<div class="flex items-center gap-3">
							<div class="flex flex-col">
								<h1 class="font-bold text-[18px]">45,242</h1>
								<p class="mb-0 font-[#194039] font-semibold text-[15px]">Evento Realizado</p>
							</div>
						</div>
						<img src="images/LayoutSix/CircleRing.png" />
					</div>
					<div class="flex gap-3 items-center mt-">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
							class="w-6 h-6 text-[#0E8A74]">
							<path fill-rule="evenodd"
								d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
								clip-rule="evenodd" />
						</svg>
						<p class="text-[#0E8A74]"><strong>2.4%</strong>do que na semana passada </p>
					</div>
				</div>

			</div>

		</div>

	</div>

	<div class="flex gap-[24px] items-center mb-[24px]">

		<div class="p-[16px] bg-white rounded-2xl w-[30%] h-[368px]">
			<h1 class="font-bold font-semibold text-[20px] mb-0">Perfil</h1>
			<p class="mb-0 text-[#828282] text-[14px]">Olá, Brien Lee. Bem-vindo ao seu Painel!</p>
			<div class="flex items-center gap-y-4 justify-center flex-col">
				<img src="images/LayoutSix/profile.png" />
				<h1 class="font-bold font-semibold text-[20px] mb-0">Samantha Liondy</h1>
				<p class="mb-0 text-[#828282] text-[14px]">Product Designer</p>
				<div class="flex gap-3 items-center">
					<div class="bg-[#F8F8F8] w-[55px] h-[55px] items-center flex justify-center rounded-full">
						<img src="images/LayoutTwo/Icons/Instagram.png" alt="">
					</div>
					<div class="bg-[#F8F8F8] w-[55px] h-[55px] items-center flex justify-center rounded-full">
						<img src="images/LayoutTwo/Icons/Twitter.png" alt="">
					</div>
					<div class="bg-[#F8F8F8] w-[55px] h-[55px] items-center flex justify-center rounded-full">
						<img src="images/LayoutTwo/Icons/Linkedin.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<table class="rounded-3xl table-auto w-[70%] h-[368px]">
			<thead class="border-b rounded-3xl">
				<tr class="bg-[#F0F1F3] rounded-3xl">
					<th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
						<div class="flex items-center justify-between font-bold">
							<div class="flex items-center gap-3">
								<span>Projeto</span>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
								<path fill-rule="evenodd"
									d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
									clip-rule="evenodd" />
							</svg>
						</div>
					</th>
					<th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
						<div class="flex items-center justify-between font-bold">
							<span>Progresso</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
								<path fill-rule="evenodd"
									d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
									clip-rule="evenodd" />
							</svg>
						</div>
					</th>
					<th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
						<div class="flex items-center justify-between font-bold">
							<span>Data inicial</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
								<path fill-rule="evenodd"
									d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
									clip-rule="evenodd" />
							</svg>
						</div>
					</th>
					<th scope="col" class="text-sm font-medium text-gray-900 py-4 px-6 text-left font-bold">
						<div class="flex items-center justify-between font-bold">
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
				<tr class="border-b bg-white" v-for="(data, index) in data_mock" :key="data?.id">
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center ">
						<div class="flex items-center gap-2">
							<div
								class="bg-[#F4ECFB] w-[44px] h-[44px] rounded-[8px] flex items-center justify-center text-[#013C94] font-semibold text-[16px]">
								{{ data?.latterName }}</div>
							<div>
								<h1 class="mb-0 text-[#1D1F2C] font-semibold text-[14px]">{{ data?.projectName }}</h1>
								<p class="mb-0 text-[#667085] text-[12px]">{{ data?.name }}</p>
							</div>
						</div>
					</td>
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
						<div class="flex items-center gap-3">
							<div class="w-[59px] bg-[#E0E2E7] rounded-2xl">
								<div
									:class="`w-[${data?.progress.toString()}]`, data?.progress !== '100%' ? 'bg-[#EB4335]' : 'bg-[#12B886]'"
									class="h-[8px] rounded-2xl"></div>
							</div>
							<span :class="data?.progress !== '100%' ? 'text-[#EB4335]' : 'text-[#12B886]'"
								class="font-bold text-[12px]">{{ data.progress }}</span>
						</div>
					</td>
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
						<span class="font-bold">{{ data?.initialDate }}</span>
					</td>
					<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
						<span class="font-bold">{{ data?.endDate }}</span>
					</td>
				</tr>
			</tbody>
		</table>

	</div>

	<!-- Chart -->
	<div class="flex items-center gap-[24px]">
		<div class="bg-white px-4 py-5 rounded-xl w-[30%] h-[550px]">
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
			<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="pie" :responsive="true"
					styleDynamic="w-full 2xl:h-[350px] h-[150px]" />
		</div>
		<div class="bg-white px-4 py-5 rounded-xl w-[70%] h-[550px]">
			<div class="mb-[44px]">

				<div class="flex justify-between items-center w-full">
					<h1 class="mb-0 font-bold text-[20px]">Mais vendida</h1>
					<div>
						<p class="mb-0 text-[14px] font-semibold flex items-center gap-3 text-[#0E8A74] text-[12px]">Essa semana
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
								<path fill-rule="evenodd"
									d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
									clip-rule="evenodd" />
							</svg>
						</p>
					</div>
				</div>

			</div>
			<div class="w-full flex items-center justify-between">
				<div class="flex items-center gap-7 px-[41px]">
					<div class="flex flex-col gap-y-4">
						<div class="bg-gray-300/90 w-[14px] rounded-t-2xl h-[265px] flex items-end">
							<span class="w-full h-[80%] rounded-t-2xl bg-[#FB3E7A]"></span>
						</div>
						<span>D</span>
					</div>
					<div class="flex flex-col gap-y-4">
						<div class="bg-gray-300/90 w-[14px] rounded-t-2xl h-[265px] flex items-end">
							<span class="w-full h-[70%] rounded-t-2xl bg-[#FB3E7A]"></span>
						</div>
						<span>S</span>
					</div>
					<div class="flex flex-col gap-y-4">
						<div class="bg-gray-300/90 w-[14px] rounded-t-2xl h-[265px] flex items-end">
							<span class="w-full h-[86%] rounded-t-2xl bg-[#FB3E7A]"></span>
						</div>
						<span>T</span>
					</div>
					<div class="flex flex-col gap-y-4">
						<div class="bg-gray-300/90 w-[14px] rounded-t-2xl h-[265px] flex items-end">
							<span class="w-full h-[50%] rounded-t-2xl bg-[#FB3E7A]"></span>
						</div>
						<span>Q</span>
					</div>
					<div class="flex flex-col gap-y-4">
						<div class="bg-gray-300/90 w-[14px] rounded-t-2xl h-[265px] flex items-end">
							<span class="w-full h-[30%] rounded-t-2xl bg-[#FB3E7A]"></span>
						</div>
						<span>Q</span>
					</div>
					<div class="flex flex-col gap-y-4">
						<div class="bg-gray-300/90 w-[14px] rounded-t-2xl h-[265px] flex items-end">
							<span class="w-full h-[70%] rounded-t-2xl bg-[#0E8A74]"></span>
						</div>
						<span>S</span>
					</div>
					<div class="flex flex-col gap-y-4">
						<div class="bg-gray-300/90 w-[14px] rounded-t-2xl h-[265px] flex items-end">
							<span class="w-full h-[40%] rounded-t-2xl bg-[#FB3E7A]"></span>
						</div>
						<span>S</span>
					</div>
				</div>
				<Chart :chart-data="chartDataPie" :chart-options="chartOptionsPie" type="doughnut" :responsive="true"
					styleDynamic="w-full 2xl:h-[350px] h-[150px]" />
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