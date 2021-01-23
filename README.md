### Developer Men
### Empresa de desarrollo web del Oriente Antioqueño
```golang
package main

import (
	"fmt"
)

type Bio map[string]string

func main() {
	for k, v := range GetBio() {
		fmt.Printf("%+v: %+v\n", k, v)
	}
}

func GetBio() Bio {
	return Bio{
		"- ⚡ Quienes somos:":                    "Somos una startup en crecimiento del Oriente Antioqueño enfocados en el desarrollo web a la medida",
		"- 🔭 I’m currently working on":      "Developer Men",
		"- 🌱 I’m currently learning":        "Golang, MongoDB, RabbitMQ, K8s, GCP (Tech stack from my company) --- Sharpening my Front End Skills for the MERN stack (Personal goal)",
		"- 👯 I’m looking to collaborate on": "Python, Golang and Docker related projects",
		"- 🤔 I’m looking for help with":     "Anything related to what I am currently learning 😅",
		"- 💬 Ask me about":                  "PHP, Laravel, MySQL & SQL, Angular, React , Software Design & Architecture, Web-Dev and SEO"
	}
}
```