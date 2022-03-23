using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using WebApplication2.Models;

namespace WebApplication2.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class KelasController : ControllerBase
    {
        private KelasContext _context;

        public KelasController(KelasContext context)
        {
            this._context = context;
        }

        // GET: api/kelas
        [HttpGet]
        public ActionResult<IEnumerable<KelasItem>> GetSiswaItems()
        {
            _context = HttpContext.RequestServices.GetService(typeof(KelasContext)) as KelasContext;
            return _context.GetAllSiswa();
        }

        //Get : api/kelas/{id}
        [HttpGet("{id}", Name = "Get")]
        public ActionResult<IEnumerable<KelasItem>> GetSiswaItem(String id)
        {
            _context = HttpContext.RequestServices.GetService(typeof(KelasContext)) as KelasContext;
            return _context.GetSiswa(id);
        }
        //post: api/kelas
        [HttpPost]
        public ActionResult<KelasItem> AddKelas([FromForm]string kelas,[FromForm] string jurusan, [FromForm]int sub)
        {
            KelasItem ki = new KelasItem();
            ki.kelas = kelas;
            ki.jurusan = jurusan;
            ki.sub = sub;

            _context = HttpContext.RequestServices.GetService(typeof(KelasContext)) as KelasContext;
            return _context.AddKelas(ki);
        }
        // [HttpOptions]
        //public ActionResult<KelasItem> OptAddKelas([FromForm] string kelas, [FromForm] string jurusan, [FromForm] int sub)
        // {
        //   KelasItem ki = new KelasItem();
        //  ki.kelas = kelas;
        // ki.jurusan = jurusan;
        // ki.sub = sub;

        //  _context = HttpContext.RequestServices.GetService(typeof(KelasContext)) as KelasContext;
        //return _context.AddKelas(ki);
        // }
        [HttpOptions]
        public ActionResult<IEnumerable<KelasItem>> OptGetKelasItem()
        {
            _context = HttpContext.RequestServices.GetService(typeof(KelasContext)) as KelasContext;
            return _context.GetAllSiswa();
        }
    }
}
