export default function (fastify, opts, done) {
  fastify.get('/users', async(request, reply)=> {
    return [
      { user: 'ange' }, 
      { user: "angetekeu" }
    ]
  })
  
  done()
}