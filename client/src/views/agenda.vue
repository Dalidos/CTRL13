

<template>
    <div class="about">
        <h1>This is an agenda page</h1>
        <!-- add event into calendar -->
        <section class="mt-5 mb-5">
            <div class="shadow rounded form-group p-2 w-100 d-flex justify-content-center">
                <div class="col-3">
                    <input type="text" class="form-control" placeholder="titre de l'évènement">
                </div>
                <div class="col-3">
                    <input type="date" class="form-control" value="">
                </div>
                <div class="col-3">
                    <button class="btn btn-primary form-control">Ajouter l'évènement</button>
                </div>
            </div>
        </section>
        <!-- calendar -->
        <div id='calendar'>
            <full-calendar :events="events" ref="calendar" @day-click="dayClick" @event-selected="eventClick"></full-calendar>
        </div>
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
                ],

                dayClick(date) {
                    console.log(date._d)

                },
                eventClick(event) {
                    console.log(event)

                }

            };
        }


    };



</script>