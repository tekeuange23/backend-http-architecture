import Fastify from 'fastify'
import * as dotenv from 'dotenv'
import fastifyMysql from '@fastify/mysql'

// Routes
import UserRoute from './routes/user.routes.js'
import TransactionRoute from './routes/transaction.routes.js'

// Instanciation
const fastify = new Array(3);
dotenv.config()

for (const [i, port] of [3000, 3001, 3002].entries()) {
  fastify[i] = Fastify({
    logger: false
  })

  // MySQL connection
  // URI format  ---->    mysql://user:password@hostname:port/database
  const { DB_HOST, DB_NAME, DB_PORT, DB_USER, DB_PASS, DB_DIALECT } = process.env
  const connectionString = DB_DIALECT + '://' + DB_USER + ':' + DB_PASS + '@' + DB_HOST + ':' + DB_PORT + '/' + DB_NAME
  // console.log(connectionString)

  fastify[i].register(fastifyMysql, {
    connectionString
  })

  // Route registering
  fastify[i].get('/', async (request, reply) => {
    // reply.type('application/json').code(200)
    // console.log(Object.keys(fastify[i]).sort());
    // const connection = fastify[i].mysql.getConnection()
    // fastify.mysql.query('SELECT id, username, hash, salt FROM users WHERE id=?', [req.params.id], function onResult (err, result) {
    //     reply.send(err || result)
    // })
    
    // return Object.keys(fastify[i].mysql)
    return {debug: true}
  })

  fastify[i].register(UserRoute, { logLevel: 'info' })
  fastify[i].register(TransactionRoute, { logLevel: 'info' })
  
  // Listening
  fastify[i].listen({ port }, (err, address) => {
    if (err) throw err
  })
}

