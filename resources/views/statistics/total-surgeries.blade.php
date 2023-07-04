<x-doctor-layout>
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/cdn.datatables.net_1.13.4_css_jquery.dataTables.min.css') }}">
    @endpush
    <div class="border p-2 mx-auto max-w-7xl p-8 my-6">
            <x-marco class="max-w-7xl">

                <x-slot name="titulo">{{ __('list of surgeries') }} </x-slot>

            <table id="patologias" class="stripe" style="width:100%">
                <thead>
                    <tr>
                        <th width="10%" style="text-align: center">{{ __('Cantidad') }}</th>
                        <th width="10%" style="text-align: center">{{ __('%') }}</th>
                        <th width="50%">{{ __('Cirugía') }}</th>
                        <th width="30%">{{ __('Pacientes') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td class="text-center text-sm text-gray-500">{{ $d['total'] }}</td>
                            <td class="text-center text-sm text-gray-500">{{ $d['promedio'] }}</td>
                            <td >{{ $d['cirugia'] }}</td>
                            <td  class="text-justify text-sm">
                                @foreach ($d['pacientes'] as $p )
                                    <p>{{ $p->name }}</p>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-marco>
       @push('script')
       <script src="{{ asset('js/code.jquery.com_jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/cdn.datatables.net_1.13.4_js_jquery.dataTables.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('#patologias').DataTable({
                        "language":{
                 "info": "_PAGE_ de _PAGES_ de _TOTAL_ ",
                   "search":"Buscar  ",
                   "paginate":{
                       "next":"Siguiente",
                       "previous":"Anterior",
                       "last":"Último",
                       "first":"Primero",
                   },
                   "lengthMenu":"Mostrar  <select class='custom-select custom-select-sm'>"+
                                 "<option value='5'>5</option>"+
                                 "<option value='10'>10</option>"+
                                 "<option value='15'>15</option>"+
                                 "<option value='20'>20</option>"+
                                 "<option value='25'>25</option>"+
                                 "<option value='50'>50</option>"+
                                 "<option value='100'>100</option>"+
                                 "<option value='-1'>Todos</option>"+
                                 "</select> Registros",
                   "loadingRecord":"Cargando....",
                   "processing":"Procesando...",
                   "emptyTable":"No hay Registros",
                   "zeroRecords":"No hay coincidencias",
                   "infoEmpty":"",
                   "infoFiltered":""
               },
                        "columnDefs": [{
                            "targets": [],
                            "orderable": false
                        }],

                    });

                });
            </script>
        @endpush
</x-doctor-layout>
