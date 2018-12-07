<template>
    <div id="Inventory">
        <div class="text content mt-5 mb-5">
            <h1>Inventaire</h1>
        </div>

        {{ product }}

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Quantité</th>
                <th scope="col">Gestion</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mark</td>
                <td>X</td>
                    <input type="number">
                    <button @click="TODO">+1</button>
            </tr>
            <tr>
                <td>Jacob</td>
                <td>Y</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>Larry</td>
                <td>Z</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    /* AJAX REQUEST */
    var axios = require('axios');

    /* RETURN RESULT */
    export default {
        name: 'Inventory',
            data() {
                return {
                    product: []
                }
            },
        created() {
            fetch('https://api.myjson.com/bins/74l63')
            .then(response => response.json())
            .then(json => {
                this.product = json.product
            })
        }
    }
</script>
