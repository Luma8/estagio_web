<template>
  <div class="h-screen">

    <div class="p-[44px] bg-white rounded-t-2xl">

      <div class="flex items-center justify-between">
        <div class="">
          <h1 class="font-bold text-[28px] mb-0">Bem-vindo de volta, Pedro!</h1>
          <p class="mb-0 text-gray-400/90">Dashboard / Listagem</p>
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

      <div class="mt-[29px] flex items-center justify-between">
        <div class="flex items-center gap-3 px-[16px] py-[12px] rounded-md border border-gray-300/90">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6 text-[#959595]">
            <path fill-rule="evenodd"
              d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
              clip-rule="evenodd" />
          </svg>
          <input class="p-0 border-0 outline-0" placeholder="Pesquisar" />
        </div>
        <div class="flex items-center gap-3">
          <div>
            <button @click="showFitler"
              class="px-[18px] py-[15px] rounded-2xl bg-[#e4ecf7] flex items-center gap-4 text-[#742EFE] font-bold">
              <span>Filtros</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <div class="w-[406px] rounded-xl p-3 absolute bg-white" v-if="hasFilterClicked">
              <h1 class="border-b-2 border-gray-300/90">Colunas</h1>
              <div class="my-4 flex flex-col gap-y-3">
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>ID</label>
                </div>
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>Nome</label>
                </div>
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>Produto</label>
                </div>
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>Total</label>
                </div>
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>Endereço</label>
                </div>
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>Status</label>
                </div>
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>Imposto</label>
                </div>
                <div class="flex gap-2">
                  <input type="checkbox">
                  <label>Ação</label>
                </div>
              </div>
              <h1 class="">Filtro</h1>
              <div class="my-3 flex flex-col gap-y-3 border-b-2 border-t-2 border-gray-200/90 py-4">
                <button class="w-full flex justify-start">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M11.47 2.47a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06l-2.47-2.47V21a.75.75 0 0 1-1.5 0V4.81L8.78 7.28a.75.75 0 0 1-1.06-1.06l3.75-3.75Z"
                      clip-rule="evenodd" />
                  </svg>
                  <span>Ordenar A-Z</span>
                </button>
                <button class="w-full flex justify-start">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M12 2.25a.75.75 0 0 1 .75.75v16.19l2.47-2.47a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 1 1 1.06-1.06l2.47 2.47V3a.75.75 0 0 1 .75-.75Z"
                      clip-rule="evenodd" />
                  </svg>
                  <span>Ordenar Z-A</span>
                </button>
              </div>
              <button class="w-full py-3 rounded-2xl bg-[#013C94]">
                <span class="font-bold text-[14px] text-white">Aplicar</span>
              </button>
            </div>
          </div>
          <button class="px-[18px] py-[15px] rounded-2xl bg-[#e4ecf7] flex items-center gap-4 text-[#742EFE] font-bold">
            <span>Exportar</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                clip-rule="evenodd" />
              <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
            </svg>
          </button>
          <button class="px-[18px] py-[15px] rounded-2xl bg-[#e4ecf7] flex items-center gap-4 text-[#742EFE] font-bold">
            <span>Cadastrar</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <button class="px-[18px] py-[15px] rounded-2xl bg-[#FFF2EE] flex items-center gap-4 text-[#FB3434]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>
          </button>
        </div>
      </div>

      <div class="border py-4 border-gray-300/90 rounded-3xl mt-[24px]">
        <table class="rounded-3xl table-auto w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-6 text-left font-bold">
                <div class="flex items-center justify-between font-bold">
                  <div class="flex items-center gap-[40px]">
                    <Checkbox v-model="checked" :binary="true" />
                    <span>Usuários</span>
                  </div>
                  <div class="flex flex-col">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                      class="w-4 h-4 mb-0">
                      <path fill-rule="evenodd"
                        d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                        clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                      class="w-4 h-4 mb-0">
                      <path fill-rule="evenodd"
                        d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                        clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-6 text-left font-bold">
                <div class="flex items-center justify-between font-bold">
                  <span>Status</span>
                </div>
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-6 text-left font-bold">
                <div class="flex items-center justify-between font-bold">
                  <span>E-mail</span>
                </div>
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-6 text-left font-bold">
                <div class="flex items-center justify-between font-bold">
                  <span>Data</span>
                </div>
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-1 text-left font-bold">

              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-2 px-1 text-left font-bold">

              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b bg-white" v-for="(data, index) in data_mock" :key="data?.id">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center ">
                <div class="flex items-center gap-[40px]">
                  <Checkbox v-model="checked" :binary="true" />
                  <div class="flex items-center gap-3">
                    <div
                      class="w-[38px] h-[38px] rounded-full flex items-center bg-[#0365F8] justify-center text-white">
                      {{ data?.latterName }}
                    </div>
                    <div class="flex flex-col">
                      <h1 class="mb-0 font-bold text-[14px]">{{ data?.name }}</h1>
                      <p class="mb-0 font-semibold text-[14px]">{{ data?.abreviation }}</p>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-sm  text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <div class="flex items-center gap-3">
                  <div :class="[
                    data?.status === 'Active' ? 'bg-[#E9FFEF] text-[#409261]' : '',
                    data?.status === 'Wait' ? 'bg-[#FFF2DD] text-[#D98634]' : '',
                    data?.status === 'Offline' ? 'bg-[#E4E4E4] text-[#3F3748]' : '',
                  ]" class="px-[8px] py-[4px] rounded-2xl font-bold">
                    <span>• {{ data?.status }}</span>
                  </div>
                </div>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <span class="font-bold">{{ data?.email }}</span>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <span class="font-bold">{{ data?.date }}</span>
              </td>
              <td class="text-sm text-gray-900 font-light px-1 py-4 whitespace-nowrap ">
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-[#959595]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                  </svg>
                </button>
              </td>
              <td class="text-sm text-gray-900 font-light px-1 py-4 whitespace-nowrap ">
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-[#959595]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                  </svg>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="justify-center items-center flex gap-4 mt-6">
        <button class="p-[8px] ">
          <span>01</span>
        </button>
        <button class="p-[8px] border-2 border-gray-300/90 rounded-md">
          <span>02</span>
        </button>
        <button class="p-[8px] ">
          <span>03</span>
        </button>
        <button class="p-[8px] ">
          <span>...</span>
        </button>
        <button class="p-[8px] ">
          <span>04</span>
        </button>
        <button class="p-[8px] ">
          <span>05</span>
        </button>
        <button class="p-[8px] ">
          <span>06</span>
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
  { latterName: 'JC', name: 'Jane Cooper', abreviation: '@jane', status: 'Active', email: 'jessica.hanson@example.com', date: '5/27/15' },
  { latterName: 'WW', name: 'Wade Warren', abreviation: '@wade456', status: 'Active', email: 'jessica.hanson@example.com', date: '5/27/15' },
  { latterName: 'JW', name: 'Jenny Wilson', abreviation: '@jenny', status: 'Wait', email: 'jessica.hanson@example.com', date: '5/27/15' },
  { latterName: 'GH', name: 'Guy Hawkins', abreviation: '@guy', status: 'Offline', email: 'jessica.hanson@example.com', date: '5/27/15' },
  { latterName: 'JC', name: 'Jane Cooper', abreviation: '@jane', status: 'Wait', email: 'jessica.hanson@example.com', date: '5/27/15' },
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
