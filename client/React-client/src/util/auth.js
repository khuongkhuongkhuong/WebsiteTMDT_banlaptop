function logout() {
  localStorage.removeItem("token");
  localStorage.removeItem("user");
  console.log(" Đã đăng xuất!");
}

export function saveUserToken(token, user) {
  localStorage.setItem("token", token);
  localStorage.setItem("user", JSON.stringify(user));
}

export function saveUser(user) {
  localStorage.setItem("user", JSON.stringify(user));
}

export function getToken() {
  return localStorage.getItem("token") || null;
}

export function getUser() {
  return JSON.parse(localStorage.getItem("user")) || null;
}

export function removeTokenUser() {
  localStorage.removeItem("token");
  localStorage.removeItem("user");
}

export function isTokenValid() {
  const token = getToken();
  if (!token) return false;
  try {
    const payload = JSON.parse(atob(token.split(".")[1]));
    return payload.exp * 1000 > Date.now();
  } catch (error) {
    return false;
  }
}
