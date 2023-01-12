export default function (fastify, opts, done) {
  fastify.get('/transactions', async(request, reply)=> {
    return [
      { transaction: 'ange' }, 
      { transaction: "angetekeu" }
    ]
  })
  
  done()
}