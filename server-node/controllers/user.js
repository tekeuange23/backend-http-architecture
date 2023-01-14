import { getAllUsers } from "../services/user.service.js";

export async function index(request, reply) {
  return await getAllUsers()
}