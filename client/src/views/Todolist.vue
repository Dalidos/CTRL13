<template>
    <div id="Todolist">
        <ol>
            <li v-for="item in items">
                {{ item }}
            </li>
        </ol>
    </div>
</template>

<script>
    export default {
        name: 'Todolist',
        data() {
            return {
                items: [
                    'Apprendre JavaScript',
                    'Apprendre Vue',
                    'Créer quelque chose de génial'
                ]
            }
        }

    }
</script>
