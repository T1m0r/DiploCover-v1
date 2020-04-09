<template>
    <div class="col-md-8" id="team">
        <div class="card">
            <div class="card-header">Team</div>
            <div class="card-body">
                <p >You are no Team-meber yet. If you want to join a Team jsut enter the team ID here or us the invite link of the team! :D</p>
                <form method="POST" action="#" aria-label="Team registration">
                    <div class="form-group row">
                        <label for="tidd" class="col-sm-4 col-form-label text-md-right">TeamID</label>
                        <div class="col-md-6">
                            <input id="tidd" type="text"  name="tidd"  required autofocus>
                        </div>
                    </div>
                </form>
                <p >Or create a new Team:</p>
                <button><a href="/profile/team/create">Create</a> </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {

            }
        },
        mounted () {
            console.log(this.tid);
            console.dir(this.tid);
        }
    }
</script>

<style scoped>
    p{
        margin-left: 2em;
        margin-right: 2em;
    }
</style>