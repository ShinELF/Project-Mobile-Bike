export default class TestRepresentation {
  constructor(id, coordinates) {
    this.id = id;
    this.coordinates = coordinates;
    this.parent = document.getElementById("france");

    this.render();
  }
  // Créé des éléments du DOM correspondant à nos événement de test de vélomobile
  render() {
    // Récupération de la lattitude et de la longitude en faisant du destructuring
    const [lat, lon] = this.coordinates;
    console.log(`lat : `, lat);

    // le parent a pour propriété position: relative
    this.parent.style.position = "relative";

    const img = this.createMarkup("img", "", this.parent, {
      src: "HTML-CSS/img/roueVelo.png",
    });
    // l'enfant a pour proprité position: absolute
    img.style.position = "absolute";
    img.style.left = 0;
    img.style.top = this.getCorrespondinglattidude(lat) - 24 + "px";
  }

  /**
   * Crée un élément du dom, lui ajoute du texte, le place comme dernier
   * enfant de parent et ajoute un attribut en utilisant le paramètre attributes
   * @param {String} markup_name
   * @param {String} text
   * @param {domElement} parent
   * @param {Object} attributes
   * @returns domElement
   */
  createMarkup(markupname, text, parent, attributes = {}) {
    const markup = document.createElement(markupname);
    markup.textContent = text;
    parent.appendChild(markup);
    for (let key in attributes) {
      markup.setAttribute(key, attributes[key]);
    }
    return markup;
  }

  getCorrespondinglattidude(x) {
    const result = -68.67 * x + 3507.67;

    // Arrondir à 2 décimales pour plus de lisibilité
    return Math.round(result * 100) / 100;
  }
}
const testsVelomobiles = [
  {
    id: "test1",
    place: {
      street: "1B, Quai Duguay-Trouin",
      city: "Saint-Malo",
      postalCode: "35400",
      country: "France",
      coordinates: "48.65179071249204, -2.0169624721211887",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test2",
    place: {
      street: "23,Boulevard Gambetta",
      city: "Calais",
      postalCode: "62100",
      country: "France",
      coordinates: "50.94648270703084, 1.8501384126617209",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test3",
    place: {
      street: "1, Place de la Porte de Versailles",
      city: "Paris",
      postalCode: "75015",
      country: "France",
      coordinates: "48.83205417050661, 2.2877515278885054",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test4",
    place: {
      street: "Avenue Herrenschmidt",
      city: "Strasbourg",
      postalCode: "67000",
      country: "France",
      coordinates: "48.59807727442453, 7.754455139519449",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test5",
    place: {
      street: "Boulevard de l'Europe",
      city: "Chassieu (Lyon)",
      postalCode: "69680",
      country: "France",
      coordinates: "45.73109783932283, 4.951475183547187",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test6",
    place: {
      street: "3, Boulevard Danielle Mitterand",
      city: "Cournon-d'Auvergne (Clermont-Ferrand)",
      postalCode: "63800",
      country: "France",
      coordinates: "45.742145393678584, 3.1537777656433463",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test7",
    place: {
      street: "Cr Jules Ladoumegue",
      city: "Bordeaux",
      postalCode: "33300",
      country: "France",
      coordinates: "44.89421417714065, -0.5775761336875124",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test8",
    place: {
      street: "Avenue Concorde",
      city: "Aussonne (Toulouse)",
      postalCode: "31840",
      country: "France",
      coordinates: "43.665509309207074, 1.3534339392649055",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test9",
    place: {
      street: "Rte de la Foire",
      city: "Pérols (Montpellier)",
      postalCode: "34470",
      country: "France",
      coordinates: "43.571727154305776, 3.9507853546028735",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
  {
    id: "test10",
    place: {
      street: "",
      city: "Nice",
      postalCode: "34000",
      country: "France",
      coordinates: "",
    },
    timeSlots: [
      {
        startDate: "2025-10-15T09:00:00",
        endDate: "2025-10-15T09:30:00",
      },
      {
        startDate: "2025-10-15T09:30:00",
        endDate: "2025-10-15T10:00:00",
      },
      {
        startDate: "2025-10-15T10:00:00",
        endDate: "2025-10-15T10:30:00",
      },
      {
        startDate: "2025-10-15T10:30:00",
        endDate: "2025-10-15T11:00:00",
      },
      {
        startDate: "2025-10-15T11:00:00",
        endDate: "2025-10-15T11:30:00",
      },
      {
        startDate: "2025-10-15T11:30:00",
        endDate: "2025-10-15T12:00:00",
      },
      {
        startDate: "2025-10-15T14:00:00",
        endDate: "2025-10-15T14:30:00",
      },
      {
        startDate: "2025-10-15T14:30:00",
        endDate: "2025-10-15T15:00:00",
      },
      {
        startDate: "2025-10-15T15:00:00",
        endDate: "2025-10-15T15:30:00",
      },
      {
        startDate: "2025-10-15T15:30:00",
        endDate: "2025-10-15T16:00:00",
      },
    ],
  },
];
// Création des points sur la carte
const firstPoint = new TestRepresentation(
  "test1",
  [43.61006414520113, 3.8773600392301875]
);
