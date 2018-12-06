

<template>
    <div class="about border">
        <h1>This is an agenda page</h1>
        <full-calendar :event-sources="eventSources"></full-calendar>
    </div>
</template>


<script>

        return {
            eventSources: [
                {
                    events(start, end, timezone, callback) {
                        self.$http.get(`/myFeed`, {timezone: timezone}).then(response => {
                            callback(response.data.data)
                        })
                    },
                    color: 'yellow',
                    textColor: 'black',
                },
                {
                    events(start, end, timezone, callback) {
                        self.$http.get(`/anotherFeed`, {timezone: self.timezone}).then(response => {
                            callback(response.data.data)
                        })
                    },
                    color: 'red',
                },
            ]
        }



</script>