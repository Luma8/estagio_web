<template>
  <div class="h-screen">

    <div class="p-[44px] rounded-t-2xl">

      <h1 class="font-bold text-[24px] mb-[8px]">Dashboard Admin</h1>
      <div class="flex items-center gap-4">
        <span class="font-semibold text-[14px] text-[#0365F8]">Dashboard</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#989898]">
          <path fill-rule="evenodd"
            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
            clip-rule="evenodd" />
        </svg>
        <span class="font-semibold text-[14px] text-[#989898]">Listagem</span>
      </div>

      <div class="flex items-center gap-3 mt-[12px]">

        <div class="p-[20px] bg-white flex flex-grow flex gap-3 rounded-xl justify-between">
          <div class="flex flex-col">
            <p class="mb-[8px] text-[16px] text-[#777980]">Total</p>
            <h1 class="font-semibold text-[24px]">2,400</h1>
          </div>
          <div class="rounded-[8px] bg-[#e6effc] w-[36px] h-[36px] flex items-center justify-center text-[#0365F8]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path
                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
            </svg>
          </div>
        </div>

        <div class="p-[20px] bg-white flex flex-grow flex gap-3 rounded-xl justify-between">
          <div class="flex flex-col">
            <p class="mb-[8px] text-[16px] text-[#777980]">Ativos</p>
            <h1 class="font-semibold text-[24px]">2,400</h1>
          </div>
          <div class="rounded-[8px] bg-[#F4ECFB] w-[36px] h-[36px] flex items-center justify-center text-[#F86624]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="w-6 h-6 text-[#883DCF]">
              <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
              <path fill-rule="evenodd"
                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                clip-rule="evenodd" />
              <path
                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
            </svg>
          </div>
        </div>

        <div class="p-[20px] bg-white flex flex-grow flex gap-3 rounded-xl justify-between">
          <div class="flex flex-col">
            <p class="mb-[8px] text-[16px] text-[#777980]">Inativos</p>
            <h1 class="font-semibold text-[24px]">$100.00</h1>
          </div>
          <div class="rounded-[8px] bg-[#FFE8E0] w-[36px] h-[36px] flex items-center justify-center text-[#F86624]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path
                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
            </svg>
          </div>
        </div>

        <div class="p-[20px] bg-white flex flex-grow flex gap-3 rounded-xl justify-between">
          <div class="flex flex-col">
            <p class="mb-[8px] text-[16px] text-[#777980]">Esse mês</p>
            <h1 class="font-semibold text-[24px]">1,400</h1>
          </div>
          <div class="rounded-[8px] bg-[#E9FAF7] w-[36px] h-[36px] flex items-center justify-center text-[#22CAAD]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z"
                clip-rule="evenodd" />
            </svg>
          </div>
        </div>

      </div>

      <div class="flex row gap-5 mt-[32px]">
        <div class="border bg-white pt-4 border-gray-300/90 rounded-3xl w-[75%]">
          <div class="p-[12px] gap-[20px] w-full flex items-center justify-between bg-white rounded-3xl">
            <div class="w-[75%] border-b border-[#CCBCF6] flex items-center gap-3 ">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                  clip-rule="evenodd" />
              </svg>
              <input placeholder="Pesquisar" class="border-0 outline-0 w-full p-0 placeholder:text-[#998AA6]" text="text" />
            </div>
            <div class="px-[12px] py-[6px] text-[#7E6B8C] text-[14px] bg-[#F7F4FE] rounded-[8px]">50 selecionados de 798
              itens</div>
          </div>
          <table class="table-auto w-full">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-6 text-left font-bold">
                  <div class="flex items-center justify-between font-bold">
                    <div class="flex items-center gap-[40px]">
                      <Checkbox v-model="checked" :binary="true" />
                      <span>Cliente</span>
                    </div>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-6 text-left font-bold">
                  <div class="flex items-center justify-between font-bold">
                    <span>E-mail</span>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-6 text-left font-bold">
                  <div class="flex items-center justify-between font-bold">
                    <span>Celular</span>
                  </div>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-1 text-left font-bold">
                  Endereço
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b bg-[#ded5f7]" v-for="(data, index) in data_mock" :key="data?.id">
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center ">
                  <div class="flex items-center gap-[40px]">
                    <Checkbox v-model="checked" :binary="true" />
                    <h1 class="mb-0 font-bold text-[14px]">{{ data?.name }}</h1>
                  </div>
                </td>
                <td class="text-sm  text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                  <span>{{ data?.email }}</span>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                  <span class="font-bold">{{ data?.phone }}</span>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                  <span class="font-bold">{{ data?.address }}</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="w-[25%] bg-white rounded-2xl p-[20px]">
          <h1 class="font-bold text-[16px]">Filtros</h1>
          <div class="mt-[16px] flex gap-3">
            <button
              class="flex w-[50%] flex items-center justify-center rounded-[8px] gap-3 items-center bg-[#E2DAFA] py-[15px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                  d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                <path
                  d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                <path
                  d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />
              </svg>
              <span>Exportar</span>
            </button>
            <button
              class="flex w-[50%] flex items-center justify-center rounded-[8px] gap-3 items-center bg-[#E2DAFA] py-[15px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M12 5.25c1.213 0 2.415.046 3.605.135a3.256 3.256 0 0 1 3.01 3.01c.044.583.077 1.17.1 1.759L17.03 8.47a.75.75 0 1 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l3-3a.75.75 0 0 0-1.06-1.06l-1.752 1.751c-.023-.65-.06-1.296-.108-1.939a4.756 4.756 0 0 0-4.392-4.392 49.422 49.422 0 0 0-7.436 0A4.756 4.756 0 0 0 3.89 8.282c-.017.224-.033.447-.046.672a.75.75 0 1 0 1.497.092c.013-.217.028-.434.044-.651a3.256 3.256 0 0 1 3.01-3.01c1.19-.09 2.392-.135 3.605-.135Zm-6.97 6.22a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.752-1.751c.023.65.06 1.296.108 1.939a4.756 4.756 0 0 0 4.392 4.392 49.413 49.413 0 0 0 7.436 0 4.756 4.756 0 0 0 4.392-4.392c.017-.223.032-.447.046-.672a.75.75 0 0 0-1.497-.092c-.013.217-.028.434-.044.651a3.256 3.256 0 0 1-3.01 3.01 47.953 47.953 0 0 1-7.21 0 3.256 3.256 0 0 1-3.01-3.01 47.759 47.759 0 0 1-.1-1.759L6.97 15.53a.75.75 0 0 0 1.06-1.06l-3-3Z"
                  clip-rule="evenodd" />
              </svg>
              <span>Atualizar</span>
            </button>
          </div>
          <div class="mt-[16px] flex gap-3">
            <button
              class="flex w-[50%] flex items-center justify-center rounded-[8px] gap-3 items-center bg-[#E2DAFA] py-[15px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                  clip-rule="evenodd" />
              </svg>
              <span>Cadastrar</span>
            </button>
            <button
              class="flex w-[50%] flex items-center justify-center rounded-[8px] gap-3 items-center bg-[#E2DAFA] py-[15px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                  clip-rule="evenodd" />
              </svg>
              <span>Excluir</span>
            </button>
          </div>
          <div class="flex flex-col gap-y-[16px] mt-[16px]">
            <div class="flex flex-col">
              <label class="mb-[6px] text-[16px] text-[#858585]">Endereço</label>
              <input placeholder="São Paulo, SP"
                class="px-[20px] py-[12px] rounded-[2px] bg-gray-200/90 placeholder:text-[#998AA6]" />
            </div>
            <div class="flex flex-col">
              <label class="mb-[6px] text-[16px] text-[#858585]">Endereço</label>
              <input placeholder="São Paulo, SP"
                class="px-[20px] py-[12px] rounded-[2px] bg-gray-200/90 placeholder:text-[#998AA6]" />
            </div>

            <div class="card flex flex-wrap justify-content-center gap-3">
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient1" name="ID" value="ID" />
                <label for="ingredient1" class="ml-2"> ID </label>
              </div>
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient2" name="Client" value="Client" />
                <label for="ingredient2" class="ml-2"> Client </label>
              </div>
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient3" name="Email" value="Email" />
                <label for="ingredient3" class="ml-2"> Email </label>
              </div>
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient4" name="Endereço" value="Endereço" />
                <label for="ingredient4" class="ml-2"> Endereço </label>
              </div>
            </div>
            <div class="card flex flex-wrap justify-content-center gap-3">
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient1" name="Endereço" value="Endereço" />
                <label for="ingredient1" class="ml-2"> Endereço </label>
              </div>
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient2" name="Total" value="Total" />
                <label for="ingredient2" class="ml-2"> Total </label>
              </div>
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient3" name="Imposto" value="Imposto" />
                <label for="ingredient3" class="ml-2"> Imposto </label>
              </div>
              <div class="flex align-items-center">
                <Checkbox v-model="pizza" inputId="ingredient4" name="Ação" value="Ação" />
                <label for="ingredient4" class="ml-2"> Ação </label>
              </div>
            </div>
            <button class="w-full py-[12px] text-white bg-[#013C94] rounded-md">Aplicar</button>
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
  { name: "João Silva", email: "joao.silva@email.com", phone: "(11) 98756-4321", address: 'Rua das Flores,12' },
  { name: "Maria Santos", email: "maria.santos@email.com", phone: "(31) 98756-4321", address: 'Rua das Flores,12' },
  { name: "João Silva", email: "joao.silva@email.com", phone: "(51) 98756-4321", address: 'Av. Principal, 45' },
  { name: "Carlos Rodrigues", email: "joao.silva@email.com", phone: "(42) 98756-4321", address: 'Rua das Flores,12' },
  { name: "João Silva", email: "joao.silva@email.com", phone: "(23) 98756-4321", address: 'Av. Principal, 45' },
  { name: "Carlos Rodrigues", email: "joao.silva@email.com", phone: "(421) 98756-4321", address: 'Rua das Flores,12' },
  { name: "João Silva", email: "joao.silva@email.com", phone: "(66) 98756-4321", address: 'Rua das Flores,12' },
  { name: "Carlos Rodrigues", email: "joao.silva@email.com", phone: "(77) 98756-4321", address: 'Av. Principal, 45' },
  { name: "João Silva", email: "joao.silva@email.com", phone: "(31) 98756-4321", address: 'Rua das Flores,12' },
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
