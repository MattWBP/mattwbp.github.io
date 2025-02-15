import json
import sys
import os

json_output = os.path.join(os.path.dirname(__file__), 'comingsoon_2020_001_data.json') 
from pprint import pprint


coming_soon = {
    '01_wonder_woman_1984':{
        'image': 'img/cropped/wonderwoman1984.png',
        'project': 'Wonder Woman 1984',
        'shot_name': '',
        'year': '2021',
        'studio': 'Framestore',
        'location': 'London, UK',
        'role': 'Nuke Compositor',
        'supplied elements': [],
        'description': 'Cheetah face enhancment and some tricky integrating cg fur into splashing water.'
        
    },

     '02_tom_and_jerry':{
        'image': 'img/cropped/tomandjerry.png',
        'project': 'Tom and Jerry',
        'shot_name': '',
        'year': '2021',
        'studio': 'Framestore',
        'location': 'London, UK',
        'role': 'Nuke Compositor',
        'supplied elements': [],
        'description': 'Stylistic Toon character integration into live action plates, with loads of attention paid to cartoon lines.'
        
    },
    
     '03_the_king_sman':{
        'image': 'img/cropped/thekingsman.png',
        'project': 'The Kings Man',
        'shot_name': '',
        'year': '2021',
        'studio': 'Framestore',
        'location': 'London, UK',
        'role': 'Nuke Compositor',
        'supplied elements': [],
        'description': 'Set Extension and CG creatures on bluescreen sets.'
        
    },

      '04_no_time_to_die':{
        'image': 'img/cropped/notimetodie.png',
        'project': 'Bond : No Time to Die',
        'shot_name': '',
        'year': '2021',
        'studio': 'Framestore',
        'location': 'London, UK',
        'role': 'Nuke Compositor',
        'supplied elements': [],
        'description': 'Car chase scene, stitching and comping multi-camera plates into bg of car interior. Had quite an extreme camera rack following action starting windscreen ending side on.'
        
    },

      '05_a_boy_called_christmas':{
        'image': 'img/cropped/aboycalledchristmas.png',
        'project': 'A Boy Called Christmas',
        'shot_name': '',
        'year': '2021',
        'studio': 'Framestore',
        'location': 'London, UK',
        'role': 'Nuke Compositor',
        'supplied elements': [],
        'description': 'A handful of cg character in hand integration, shots of a character riding a cg animal with tricky keying, and a cool dmp pov shot.'
        
    },

}

# pprint(shot_breakdowns)

with open(json_output, 'w') as fp:
    json.dump(coming_soon, fp, indent=4)