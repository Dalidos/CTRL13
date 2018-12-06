

<template>
    <div class="about border">
        <h1>This is an agenda page</h1>
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