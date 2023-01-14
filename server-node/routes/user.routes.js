import { index } from '../controllers/user.js'

export default function (fastify, opts, done) {
  fastify.get('/users', index)
  
  done()
}