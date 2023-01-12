import Fastify from 'fastify'
import * as dotenv from 'dotenv'

// Routes
import UserRoute from './routes/user.js'
import TransactionRoute from './routes/transaction.js'

// Instanciation
const fastify = Fastify({
  logger: true
})

dotenv.config()


fastify.get('/', async (request, reply) => {
  reply.type('application/json').code(200)
  return { hello: 'world' }
})

// Route registering
fastify.register(UserRoute, { logLevel: 'info' })
fastify.register(TransactionRoute, { logLevel: 'info' })


fastify.listen({ port: process.env.PORT  }, (err, address) => {
  if (err) throw err
  // Server is now listening on ${address}
})
