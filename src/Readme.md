# Andromeda

Andromeda is a package that will allow you to create chains of work
this chain should be jobs implementing or extending basic jobs
this needs a storage to work in queue
this data can not travel along with the payload of the job in the queue

when a Jobs runs it's necessary to store the chain in some place, checking a
no-sql option due I can save the status

key = operation uuid
content {
    name: 'name of the chain',
    jobs: [
        {
            job: "JobClass1"
        },
        {
            job: "JobClass2"
        }
    ],
    running: null // name of the job or null
    status: ['pending', 'running', 'complete']
}
