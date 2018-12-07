

<template>
    <div class="about">

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