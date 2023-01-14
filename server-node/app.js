import Fastify from 'fastify'
import * as dotenv from 'dotenv'

// Routes
import UserRoute from './routes/user.js'
import TransactionRoute from './routes/transaction.js'

// Instanciation
const fastify = new Array(3);
dotenv.config()

for (const [i, port] of [3000, 3001, 3002].entries()) {
  fastify[i] = Fastify({
    logger: true
  })
  
  fastify[i].get('/', async (request, reply) => {
    reply.type('application/json').code(200)
    return { hello: 'world' }
  })

  // Route registering
  fastify[i].register(UserRoute, { logLevel: 'info' })
  fastify[i].register(TransactionRoute, { logLevel: 'info' })
  
  // 
  fastify[i].listen({ port }, (err, address) => {
    if (err) throw err
  })
}

