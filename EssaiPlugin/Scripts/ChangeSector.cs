using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class ChangeSector : MonoBehaviour {

    public Button BoutonPrevious;
    public GameObject Secteur1;
    public GameObject Secteur2;
    public GameObject Secteur3;
    public GameObject Secteur4;
    public GameObject MenuPrincipale;

    // Use this for initialization
    void Start () {
		
	}

    // Update is called once per frame
    void Update()
    {
        if (Input.GetMouseButtonUp(0))
        {
            BoutonPrevious.onClick.AddListener(Menu);
        }
    }

    void Menu()
    {
        Secteur1.SetActive(true);
        Secteur2.SetActive(false);
        Secteur3.SetActive(false);
        Secteur4.SetActive(false);
        MenuPrincipale.SetActive(false);
    }
}
