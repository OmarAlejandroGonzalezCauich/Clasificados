    @extends('principal')
    @section('contenido')
        <template v-if="menu==0">
            <example-dashboard></example-dashboard>
        </template>

        <template v-if="menu==1">
            <example-banners></example-banners>
        </template>

        <template v-if="menu==2">
            <example-users></example-users>
        </template>

        <template v-if="menu==3">
            <example-spots></example-spots>
        </template>
    @endsection
    