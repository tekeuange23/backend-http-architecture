import { index } from '../controllers/user.js'

export default function (fastify, opts, done) {
  // fastify.get('/users', index)

  fastify.get('/users', async function index(request, reply) {
    // const connection = await fastify?.mysql?.getConnection()
    // const [rows, fields] = await connection.query('SELECT * FROM user')
    // connection.release()
    // return rows[0]
  })
  
  done()
}