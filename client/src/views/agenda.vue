

<template>
    <div class="about">
        <h1>This is an agenda page</h1>
        <!-- add event into calendar -->
        <section>
            <div class="form-group row">
                <input type="text" class="form-control" placeholder="titre de l'évènement">
                <input type="date" class="form-control" value="">
                <button class="btn btn-primary">Ajouter l'évènement</button>
            </div>
        </section>
        <!-- calendar -->
        <full-calendar :events="events"></full-calendar>
    </div>
</template>


<script>

    export default {
        data() {
            return {
                events: [
                    {
                        title  : 'event1',
                        start  : '2018-12-03'
                    },
                    {
                        title  : 'event1',
                        start  : '2018-12-04'
                    }
                ]
            };
        }
    };

</script>