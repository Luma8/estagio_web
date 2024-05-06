<template>
  <div class="h-screen">

    <div class="rounded-t-2xl">

      <div class="flex items-center gap-[24px]">

        <div class="rounded-md bg-white flex-grow border border-gray-300/90 rounded-md p-[20px] mt-[22px]">
          <div class="flex items-center justify-between">
            <div class="flex flex-col gap-y-[6px]">
              <p class="mb-0 text-[#777980] text-[16px]">Item A</p>
              <h1 class="font-semibold text-[28px]">1,201</h1>
            </div>
            <div class="flex flex-col gap-y-[6px]">
              <div
                class="flex items-center justify-center rounded-full bg-gradient-to-tr from-[#14DC73] to-[#26B893] w-[40px] h-[40px] text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M1.5 9.832v1.793c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875V9.832a3 3 0 0 0-.722-1.952l-3.285-3.832A3 3 0 0 0 16.215 3h-8.43a3 3 0 0 0-2.278 1.048L2.222 7.88A3 3 0 0 0 1.5 9.832ZM7.785 4.5a1.5 1.5 0 0 0-1.139.524L3.881 8.25h3.165a3 3 0 0 1 2.496 1.336l.164.246a1.5 1.5 0 0 0 1.248.668h2.092a1.5 1.5 0 0 0 1.248-.668l.164-.246a3 3 0 0 1 2.496-1.336h3.165l-2.765-3.226a1.5 1.5 0 0 0-1.139-.524h-8.43Z"
                    clip-rule="evenodd" />
                  <path
                    d="M2.813 15c-.725 0-1.313.588-1.313 1.313V18a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-1.688c0-.724-.588-1.312-1.313-1.312h-4.233a3 3 0 0 0-2.496 1.336l-.164.246a1.5 1.5 0 0 1-1.248.668h-2.092a1.5 1.5 0 0 1-1.248-.668l-.164-.246A3 3 0 0 0 7.046 15H2.812Z" />
                </svg>
              </div>
              <div class="flex items-center gap-1 text-[#12B886] ">
                <p class="mb-0 font-bold text-[14px]">10%</p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-md bg-white flex-grow border border-gray-300/90 rounded-md p-[20px] mt-[22px]">
          <div class="flex items-center justify-between">
            <div class="flex flex-col gap-y-[6px]">
              <p class="mb-0 text-[#777980] text-[16px]">Item B</p>
              <h1 class="font-semibold text-[28px]">1,201</h1>
            </div>
            <div class="flex flex-col gap-y-[6px]">
              <div
                class="flex items-center justify-center rounded-full bg-gradient-to-tr from-[#14DC73] to-[#26B893] w-[40px] h-[40px] text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M1.5 9.832v1.793c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875V9.832a3 3 0 0 0-.722-1.952l-3.285-3.832A3 3 0 0 0 16.215 3h-8.43a3 3 0 0 0-2.278 1.048L2.222 7.88A3 3 0 0 0 1.5 9.832ZM7.785 4.5a1.5 1.5 0 0 0-1.139.524L3.881 8.25h3.165a3 3 0 0 1 2.496 1.336l.164.246a1.5 1.5 0 0 0 1.248.668h2.092a1.5 1.5 0 0 0 1.248-.668l.164-.246a3 3 0 0 1 2.496-1.336h3.165l-2.765-3.226a1.5 1.5 0 0 0-1.139-.524h-8.43Z"
                    clip-rule="evenodd" />
                  <path
                    d="M2.813 15c-.725 0-1.313.588-1.313 1.313V18a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-1.688c0-.724-.588-1.312-1.313-1.312h-4.233a3 3 0 0 0-2.496 1.336l-.164.246a1.5 1.5 0 0 1-1.248.668h-2.092a1.5 1.5 0 0 1-1.248-.668l-.164-.246A3 3 0 0 0 7.046 15H2.812Z" />
                </svg>
              </div>
              <div class="flex items-center gap-1 text-[#12B886] ">
                <p class="mb-0 font-bold text-[14px]">10%</p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-md bg-white flex-grow border border-gray-300/90 rounded-md p-[20px] mt-[22px]">
          <div class="flex items-center justify-between">
            <div class="flex flex-col gap-y-[6px]">
              <p class="mb-0 text-[#777980] text-[16px]">Item C</p>
              <h1 class="font-semibold text-[28px]">1,201</h1>
            </div>
            <div class="flex flex-col gap-y-[6px]">
              <div
                class="flex items-center justify-center rounded-full bg-gradient-to-tr from-[#14DC73] to-[#26B893] w-[40px] h-[40px] text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M1.5 9.832v1.793c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875V9.832a3 3 0 0 0-.722-1.952l-3.285-3.832A3 3 0 0 0 16.215 3h-8.43a3 3 0 0 0-2.278 1.048L2.222 7.88A3 3 0 0 0 1.5 9.832ZM7.785 4.5a1.5 1.5 0 0 0-1.139.524L3.881 8.25h3.165a3 3 0 0 1 2.496 1.336l.164.246a1.5 1.5 0 0 0 1.248.668h2.092a1.5 1.5 0 0 0 1.248-.668l.164-.246a3 3 0 0 1 2.496-1.336h3.165l-2.765-3.226a1.5 1.5 0 0 0-1.139-.524h-8.43Z"
                    clip-rule="evenodd" />
                  <path
                    d="M2.813 15c-.725 0-1.313.588-1.313 1.313V18a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-1.688c0-.724-.588-1.312-1.313-1.312h-4.233a3 3 0 0 0-2.496 1.336l-.164.246a1.5 1.5 0 0 1-1.248.668h-2.092a1.5 1.5 0 0 1-1.248-.668l-.164-.246A3 3 0 0 0 7.046 15H2.812Z" />
                </svg>
              </div>
              <div class="flex items-center gap-1 text-[#12B886] ">
                <p class="mb-0 font-bold text-[14px]">10%</p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-md bg-white flex-grow border border-gray-300/90 rounded-md p-[20px] mt-[22px]">
          <div class="flex items-center justify-between">
            <div class="flex flex-col gap-y-[6px]">
              <p class="mb-0 text-[#777980] text-[16px]">Item D</p>
              <h1 class="font-semibold text-[28px]">1,201</h1>
            </div>
            <div class="flex flex-col gap-y-[6px]">
              <div
                class="flex items-center justify-center rounded-full bg-gradient-to-tr from-[#14DC73] to-[#26B893] w-[40px] h-[40px] text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M1.5 9.832v1.793c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875V9.832a3 3 0 0 0-.722-1.952l-3.285-3.832A3 3 0 0 0 16.215 3h-8.43a3 3 0 0 0-2.278 1.048L2.222 7.88A3 3 0 0 0 1.5 9.832ZM7.785 4.5a1.5 1.5 0 0 0-1.139.524L3.881 8.25h3.165a3 3 0 0 1 2.496 1.336l.164.246a1.5 1.5 0 0 0 1.248.668h2.092a1.5 1.5 0 0 0 1.248-.668l.164-.246a3 3 0 0 1 2.496-1.336h3.165l-2.765-3.226a1.5 1.5 0 0 0-1.139-.524h-8.43Z"
                    clip-rule="evenodd" />
                  <path
                    d="M2.813 15c-.725 0-1.313.588-1.313 1.313V18a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-1.688c0-.724-.588-1.312-1.313-1.312h-4.233a3 3 0 0 0-2.496 1.336l-.164.246a1.5 1.5 0 0 1-1.248.668h-2.092a1.5 1.5 0 0 1-1.248-.668l-.164-.246A3 3 0 0 0 7.046 15H2.812Z" />
                </svg>
              </div>
              <div class="flex items-center gap-1 text-[#12B886] ">
                <p class="mb-0 font-bold text-[14px]">10%</p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd"
                    d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="flex items-center gap-4 my-[22px] justify-end">
        <button
          class="border border-gray-200/90 px-[12px] py-[5px] text-[#858D9D]  bg-white rounded-md flex gap-3 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path
              d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
          </svg>
          <span class="text-[#858D9D] text-[14px]">Filtros</span>
        </button>
        <button
          class="border border-gray-200/90 px-[12px] py-[5px] text-[#858D9D]  bg-white rounded-md flex gap-3 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path
              d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
            <path
              d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
          </svg>
          <span class="text-[#858D9D] text-[14px]">Exportar</span>
        </button>
        <button
          class="border border-gray-200/90 px-[12px] py-[5px] text-[#858D9D]  bg-white rounded-md flex gap-3 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
              clip-rule="evenodd" />
          </svg>
          <span class="text-[#858D9D] text-[14px]">Excluir</span>
        </button>
        <button
          class="border border-gray-200/90 px-[12px] py-[5px] text-[#858D9D]  bg-white rounded-md flex gap-3 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
              clip-rule="evenodd" />
          </svg>
          <span class="text-[#858D9D] text-[14px]">Cadastrar</span>
        </button>
      </div>


      <div class="border border-gray-300/90">
        <table class="table-auto w-full">
          <thead class="border-b">
            <tr class="bg-[#ded5f7]">
              <th scope="col" class="text-sm font-medium text-gray-900 py-[16px] px-6 text-left font-bold">
                <div class="flex items-center justify-between font-bold">
                  <div class="flex items-center gap-2">
                    <Checkbox v-model="checked" :binary="true" />
                    <span>ID</span>
                  </div>
                </div>
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-[16px] px-6 text-left font-bold">
                <div class="flex items-center justify-between font-bold">
                  <span>Cliente</span>
                </div>
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-[16px] px-6 text-left font-bold">
                <div class="flex items-center justify-between font-bold">
                  <span>Data</span>
                </div>
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-[16px] px-1 text-left font-bold">
                Total
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-[16px] px-1 text-left font-bold">
                Pagamento
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-[16px] px-1 text-left font-bold">
                Status
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 py-[16px] px-1 text-left font-bold">
                Ação
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b bg-white" v-for="(data, index) in data_mock" :key="data?.id">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3 items-center ">
                <div class="flex items-center gap-2">
                  <Checkbox v-model="checked" :binary="true" />
                  <h1 class="mb-0 font-bold text-[14px]">{{ data?.id }}</h1>
                </div>
              </td>
              <td class="text-sm  text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <div class="flex flex-col">
                  <span class="font-bold">{{ data?.name }}</span>
                  <span>{{ data?.email }}</span>
                </div>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <span class="font-bold">{{ data?.date }}</span>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <span class="font-bold">{{ data?.total }}</span>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <span class="font-bold">{{ data?.payment }}</span>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <span class="font-bold">{{ data?.status }}</span>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                <div class="flex items-center gap-3">
                  <button class="text-[#858D9D]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                      <path fill-rule="evenodd"
                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                        clip-rule="evenodd" />
                    </svg>
                  </button>
                  <button class="text-[#858D9D]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path fill-rule="evenodd"
                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                        clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="py-[20px] px-[24px] bg-white flex items-center justify-between">
          <h1 class="mb-0">Mostrando 1-10 de 100</h1>
          <div class="flex items-center gap-3">
            <button class="border border-gray-300/90 rounded-md w-[40px] h-[40px] flex items-center justify-center"><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <button class="border border-gray-300/90 rounded-md w-[40px] h-[40px] flex items-center justify-center bg-gradient-to-t from-[#41DC67] to-[#B1DC4A] text-white">1</button>
            <button class="border border-gray-300/90 rounded-md w-[40px] h-[40px] flex items-center justify-center">...</button>
            <button class="border border-gray-300/90 rounded-md w-[40px] h-[40px] flex items-center justify-center"><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                  clip-rule="evenodd" />
              </svg>
              </button>
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
  { id: '302012', name: 'John Bushmill', email: 'johnb@mail.com', date: '1 min ago', total: '$121.00', payment: 'Mastercard', status: 'Efetuado' },
  { id: '422012', name: 'John Bushmill', email: 'johnb@mail.com', date: '1 min ago', total: '$121.00', payment: 'Mastercard', status: 'Enviado' },
  { id: '523212', name: 'John Bushmill', email: 'johnb@mail.com', date: '1 min ago', total: '$121.00', payment: 'Mastercard', status: 'Efetuado' },
  { id: '902012', name: 'John Bushmill', email: 'johnb@mail.com', date: '1 min ago', total: '$121.00', payment: 'Mastercard', status: 'Enviado' },
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
