{!! "<h1>Check Console!</h1>" !!}

@php
    $frameworks = ['Vue.js', 'React', 'Angular', 'Svelte', 'Ember.js'];
    $result = "All items in frameworks have been logged to console!";
@endphp

<div id="app">
    @verbatim
        {{ result }}
    @endverbatim 
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>

    console.log("Popular Frameworks:");
    /*let frameworks = @json($frameworks);
    frameworks.forEach((item)=>{
        console.log(item);
    });*/
    let frameworks = {{ Js::from($frameworks) }};
    for (let item of frameworks) {
        console.log(item);
    }

    //var result = "All items in frameworks have been logged to console!";

    const { createApp, ref } = Vue

    var result = @json($result);

    createApp({
        setup() {
        //const message = ref('Hello vue!')
        return { result }
        }
    }).mount('#app')
</script>